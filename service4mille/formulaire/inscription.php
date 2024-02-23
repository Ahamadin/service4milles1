<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de compte - Service4milles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Bookman Old Style', sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5 col-8">
        <h2 class="bg-primary text-light">Créer un compte</h2>
        <form action="#" method="post">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom :</label>
                    <input type="text" id="nom" name="nom" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="mot_de_passe" class="form-label">Mot de passe :</label>
                    <input type="password" id="mot_de_passe" name="mot_de_passe" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="confirmer_mot_de_passe" class="form-label">Confirmer le mot de passe :</label>
                    <input type="password" id="confirmer_mot_de_passe" name="confirmer_mot_de_passe" class="form-control" required>
                </div>
            </div>
            <div class="row offset-5">
                <div class="col-md-12">
                    <input type="submit" value="Créer un compte" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
