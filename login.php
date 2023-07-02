<?php

class User
{
    private $usuario;
    private $password;

    public function __construct($usuario, $password)
    {
        $this->usuario = $usuario;
        $this->password = $password;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function authenticate($usuario, $password)
    {
        return $this->usuario === $usuario && $this->password === $password;
    }
}

class Auth
{
    private $users;

    public function __construct()
    {
        $this->users = [];
    }

    public function registerUser($usuario, $password)
    {
        $user = new User($usuario, $password);
        $this->users[] = $user;
    }

    public function login($usuario, $password)
    {
        foreach ($this->users as $user) {
            if ($user->authenticate($usuario, $password)) {
                return true;
            }
        }
        return false;
    }
}

// Crear una instancia de Auth y registrar algunos usuarios
$auth = new Auth();
$auth->registerUser("usuario1", "contraseña1");
$auth->registerUser("usuario2", "contraseña2");

// Proceso de inicio de sesión
$message = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    if ($auth->login($usuario, $password)) {
        $message = "Inicio de sesión exitoso";
    } else {
        $message = "Nombre de usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Iniciar sesión</title>
</head>

<body>
    <h1>Iniciar sesión</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Iniciar sesión">
    </form>

    <p><?php echo $message; ?></p>
</body>

</html>