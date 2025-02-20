<?php


$db = new PDO('mysql:host=localhost;dbname=corteiz', 'root', '');
$db->exec('SET NAMES "UTF8"');

$sql = 'SELECT * FROM `liste`';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute la requête
$query->execute();

// On stocke le résultat dans un tableau associatif
$result = $query->fetchAll();

require_once('close.php');

?> 


<?php include( './component/header.php') ?> 
    <style>
         body{ 
        background: linear-gradient(to right,rgb(0, 0, 0),rgb(73, 73, 73));
    }
    .card{
        background-color: black;
        color: gold;
    }
        </style>
        <link rel="stylesheet" type="text/css" href="css/style.css">
     
    
<?php include( './component/nav.php') ?> 
    


    <main>
    <?php
            foreach($result as $produit){
            if($produit["id"] == $_GET["id"]) {
        ?>
       <div class="card" style="width: 50rem;">
            <img class="art" src="<?= $produit['image'] ?>"
            alt="" width="100%">
            <div class="card-body">
            <h2 class="card-title"><?= $produit['produit'] ?></h2>
            <?= $produit['prix'] ?>$<br>
            <p class="card-text">  <?= $produit['Description'] ?></p>
            <?= $produit['nombre'] ?> dispo<br>
            <input type="submit" id="panier" name="panier" class="btn btn-warning btn- bloc my-2" value="ajouter dans le panier">
            <input type="number" name="quantity" value="1" cclass="btn btn-primary" <?= $produit['actif'] ?>">
        </div>
            <?php
            }
        }
    ?>
    </main>
    
    <?php include( './component/footer.php') ?>    
</body>
</html>