<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page non trouvée - 404</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="./assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .error-container {
            max-width: 600px;
            margin: auto;
        }
        .error-code {
            font-size: 8rem;
            font-weight: bold;
            color: #343a40;
        }
        .error-message {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-code">404</div>
        <p class="error-message">Oups! La page que vous cherchez n'a pas pu être trouvée.</p>
        <a href="/solola/public/index.php" class="btn btn-primary btn-xl">Retour à l'accueil</a>
    </div>

    <!-- Lien vers Bootstrap JS et ses dépendances -->
    <script src="./assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
