<?php
// On démarre une session
session_start();

if($_POST){
    if(isset($_POST['produit']) && !empty($_POST['produit'])
    && isset($_POST['prix']) && !empty($_POST['prix'])
    && isset($_POST['image']) && !empty($_POST['image'])
    && isset($_POST['nombre']) && !empty($_POST['nombre'])){
        // On inclut la connexion à la base
        require_once('../connect.php');

        // On nettoie les données envoyées
        $produit = strip_tags($_POST['produit']);
        $prix = strip_tags($_POST['prix']);
        $nombre = strip_tags($_POST['nombre']);
        $image = strip_tags($_POST['image']);

        $sql = 'INSERT INTO `liste` (`image`, `produit`, `prix`, `nombre`, `actif` ) VALUES (:image, :produit, :prix, :nombre, 1);';

        $query = $db->prepare($sql);

        $query->bindValue(':produit', $produit, PDO::PARAM_STR);
        $query->bindValue(':prix', $prix, PDO::PARAM_STR);
        $query->bindValue(':nombre', $nombre, PDO::PARAM_INT);
        $query->bindValue(':image', $image, PDO::PARAM_INT);

        $query->execute();

        $_SESSION['message'] = "Produit ajouté";
        require_once('../close.php');

        header('Location: index.php');
    }else{
        $_SESSION['erreur'] = "Le formulaire est incomplet";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
    <style>
    body{
        background: linear-gradient(to right,rgb(0, 0, 0),rgb(73, 73, 73));
    }
    h1{
        color: gold;
    }
    label{
        color: gold;
    }
    a{
        margin: 20px;
    }
</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <a href="/achat/admin/adminer.php" class="btn btn-warning">
            Back
        </a>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <?php
                    if(!empty($_SESSION['erreur'])){
                        echo '<div class="alert alert-danger" role="alert">
                                '. $_SESSION['erreur'].'
                            </div>';
                        $_SESSION['erreur'] = "";
                    }
                ?>
                <h1>Ajouter un produit</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="produit">Produit</label>
                        <input type="text" id="produit" name="produit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="prix">Prix</label>
                        <input type="text" id="prix" name="prix" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="number" id="nombre" name="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div><br>
                    <button class="btn btn-primary" width="10%">Envoyer</button>
                </form>
            </section>
        </div>
    </main>
</body>
</html>