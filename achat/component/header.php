
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
        body{
            background-color: black;
        }
        #popup-overlay{
  position: fixed;
top: 0;
left: 0;
right: 0;
bottom: 0;
background: linear-gradient(to right,rgb(73, 73, 73),rgb(0, 0, 0));
z-index: 98;
display: none;
}

#popup-overlay.open{

  display: block !important;
}

.popup-content{
max-width: 600px;
width: 100%;
padding: 30px;
box-sizing: border-box;
background:rgb(83, 83, 83);
color: #fff;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}

.popup-content p{
margin: 60px, 0;
}

.popup-link{
text-decoration: none;
color: #fff;
background:rgb(207, 205, 205);
color: black;
padding: 10px 20px;
border-radius: 5px;
display: inline-block;
}

.card{
  display: grid;
}
    </style>

 
     