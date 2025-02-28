



<?php
 
 include_once('config.php');

 if ($conect->connect_error) {
    die();
}

if (isset($_POST['n']) && isset($_POST['s'])) {
    $n = $conect->real_escape_string($_POST['n']);
    $s = $conect->real_escape_string($_POST['s']);
    session_start();
    $sql = "SELECT * FROM usuarios WHERE n = '$n' AND s = '$s'";
    $result = $conect->query($sql);
    
    if ($result->num_rows > 0) {
        $_SESSION['n'] = $row['n'];
        $_SESSION['s'] = $row['s'];
        header('Location: page1/login.php');
    } else {

        header('Location: login_page.php');
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {

            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-button {
            width: 100%;
            padding: 10px;
            background-color: #6200ea;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-button:hover {
            background-color: #3700b3;
        }

        .form-link {
            text-align: center;
            margin-top: 10px;
        }

        .form-link a {
            color: #6200ea;
            text-decoration: none;
            font-size: 14px;
        }

        .form-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form  action="login_page.php" method="post">
            <h2>Login</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="n" name="n" placeholder="Digite seu nome ou email" required style="text-decoration: none;">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="s" name="s" placeholder="Digite sua senha" required style="text-decoration: none;">
            </div>
            <button type="submit" class="form-button">Entrar</button>
            <div class="form-link">
                <a href="register_page.html">Não tem uma conta? Registre-se</a>
            </div>
        </form>
    </div>
</body>
</html>
