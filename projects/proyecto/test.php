<?php
session_start();

include('config.php');

//$email = $_POST['email'];
//$password = md5($_POST['password']);
//$email = "usuario@usuario.es";
$email = $_POST['email'];
$password = md5($_POST["password"]);

$query ="SELECT * FROM usuario WHERE email='$email' AND password='$password'";
$result = mysqli_query($mysqli, $query);
$count = mysqli_num_rows($result);

/*while($res = mysqli_fetch_array($result)) {
    echo "<h2>Id:".$res['id']."</h2>";
    echo "<h2>Email:".$res['email']."</h2>";
    echo "<h2>Password:".$res['password']."</h2>";
    echo "<h2>Nombre:".$res['nombre']."</h2>";
}

if ($count = 1) {
    echo "Login";
}else{
    echo "Error";
}*/

if ($count = 1) {
    $_SESSION['canAccess'] = true;
    header('Location: dashboard.php');
    exit;
}else{
    $_SESSION['canAccess'] = false;
    echo "Error";
}

mysqli_close($mysqli);
?>