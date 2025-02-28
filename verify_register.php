<?php
if (isset($_POST['submit'])) {
    include_once('config.php');

    if (!$conect) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    $nome = mysqli_real_escape_string($conect, $_POST['n']);
    $senha = mysqli_real_escape_string($conect, $_POST['s']);
    $email = mysqli_real_escape_string($conect, $_POST['e']);
   
    
    $sql = "INSERT INTO usuarios (n, e, s) VALUES ('$nome', '$email', '$senha')";
    if (mysqli_query($conect, $sql)) {
        header("Location: login_page.php");
        exit;
    } else {
       
    }
}
?>
