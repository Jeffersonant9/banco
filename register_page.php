<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar-se</title>
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
            height: 100vh;
        }

        .form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 350px;
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
    </style>
</head>
<body>
<div class="form-container">
    <form class="register-form" action="verify_register.php" method="post">
        <h2>Registrar-se</h2>
        <div class="form-group">
            <label for="n">Nome</label>
            <input type="text" id="n" name="n" placeholder="Escolha um nome" required style="text-decoration: none;">
        </div>
        <div class="form-group">
            <label for="e">Email</label>
            <input type="email" id="e" name="e" placeholder="Digite seu email" required style="text-decoration: none;">
        </div>
        <div class="form-group">
            <label for="s">Senha</label>
            <input type="password" id="s" name="s" placeholder="Crie uma senha" required style="text-decoration: none;">
        </div>
        <button type="submit" class="form-button" name="submit">Registrar</button>
        <div class="form-link">
            <a href="login_page.php">Já possui uma conta? Faça login</a>
        </div>
    </form>
</div>
</body>
</html>
