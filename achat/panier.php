<?php

$connect = mysqli_connect("localhost", "root", "", "corteiz")

?>

    <?php include( './component/header.php') ?> 
    <title>Panier</title>
    <style>
        body{
            background-color: black;
        }
    </style>
    <link rel="stylesheet" href="./css/panier.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php include( './component/nav.php') ?> 
    
    <h2 class="text-center">Panier</h2>
    
    
    
    
    
    <table class="table">
        <thead>
            
            
            <tr>
                <th scope="col">image</th>
                <th scope="col">nom</th>
                <th scope="col">prix</th>
                <th scope="col">achter</th>
            </tr>
                <?php
                    
                    $query = "SELECT * FROM liste";
                    
                    $result = mysqli_query($connect,$query);
                    
                    while ($row = mysqli_fetch_array($result)) {?>
                    <form method="post" action="panier.php?id=<?=$row['id'] ?>">
                        </thead>
                        <tbody class="table-group-divider">
    
                            
                            <tr>
                                    <th><img class="" src="<?= $row['image'] ?>
                                    alt="" width=""></th>
        <th scope="row"><?= $row ['produit']; ?></th>
        <th scope="row"><?= $row['prix'] ?></th>
        <th scope="row"><button class="btn btn-primary" type="submit">Buy</button></th>
    </tr>
                <?php }

                ?>
  </tbody>
</table>


<?php include( './component/footer.php') ?>           
  
                    

</body>
</html>