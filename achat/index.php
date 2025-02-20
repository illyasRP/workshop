<?php

session_start();

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
<title>Corteiz.be</title>
<link rel="stylesheet" type="text/css" href="/css/style.css">
<style>
      body{ 
        background: linear-gradient(to right,rgb(0, 0, 0),rgb(73, 73, 73));

    }

    .sucess{
	text-align: center;
	color: white;
}
.sucess a {
	text-decoration: none;
	color: #58aef7;
}

.article{
    margin: 3%;
    color: gold;
    display: grid;
    width: 50%;
    height: 120%;
    justify-content: center;
}
</style>
<?php include( './component/nav.php') ?> 

    
    
    
<div id="popup-overlay" class="open" >
    <div class="popup-content">
        <h1>Bonjour</h1><br>
        <p>Avant de acceder vers Corteiz.be veuillez accepter tous les cookies</p><br>
        <a href="javascript:void(0)" onclick="togglePopup()" class="popup-link">Accepter les cookies</a>

    </div>
</div>
   
        
        
    

<script src="./js/app.js"></script>


    <img class="acc" src="https://corteizsite.fr/wp-content/uploads/2024/10/corteiz-france-banner-1024x413.webp"
    alt="" width="100%" height="">


    <main class="">
    <div class="articles">

            <?php
            foreach($result as $produit){
        ?>
        
            <div class="article">

                <a href="article.php?id=<?= $produit['id'] ?>">
                
                    <img class="at" src="<?= $produit['image'] ?>"
                    alt="" width="30%">
                </a>
                
                    <h3><strong class="iem-title"><?= $produit['produit'] ?></strong></h3>
                    <H4><?= $produit['prix'] ?>€</H4>
                    
                    <input type="number" name="quantity" value="1" class="form-control"><br>

                    <button type="submit" class="btn btn-warning">Ajouter dans le panier</button>

                    </div>
                    <?php
        }
    ?>
        </div>
        <!-- <div class="add">
            <a href="add.php">ajouter un article</a>
        </div>
        <div class="edit">
            <a href="edit.php">edit</a>
        </div>
        <div>
            <a href="edit.php"></a>
        </div> -->



        
    </main>
    <script>
    // Show modal after successful login (you can replace this with your own logic)
    <?php if (isset($_GET['login']) && $_GET['login'] == 'success') { ?>
      // Display the success popup modal
      var loginSuccessModal = new bootstrap.Modal(document.getElementById('loginSuccessModal'));
      loginSuccessModal.show();
    <?php } ?>
  </script>



    <?php include( './component/footer.php') ?>  









<a href="logout.php">vzvev</a>






</body>

</html>