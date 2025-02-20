<?php
function afficher()
{
    if (require ("../login.php"));
    $req = $access->prepare("SELECT * FROM corteiz ORDER BY id DESC");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    $req->closeCursor();
    return $data;
}
?>