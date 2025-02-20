<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    transition: all 0.4s ease;
}

:root{
    --body-color: #E4E9F7;
    --nav-color:rgb(0, 0, 0);
    --side-nav: #010718;
    --text-color: #FFF;
    --search-bar: #F2F2F2;
    --search-text: #010718;
}


body{
    height: 100vh;
    background-color: var(--body-color);
}


body.dark{
    --body-color: #18191A;
    --nav-color: #242526;
    --side-nav: #242526;
    --text-color: #CCC;
    --search-bar: #242526;
}


nav{
    position: fixed;
    top: 0;
    left: 0;
    height: 70px;
    width: 100%;
    background-color: var(--nav-color);
    z-index: 100;
}

body.dark nav{
    border: 1px solid #393838;
}

nav .nav-bar{
    position: relative;
    height: 100%;
    max-width: 1000px;
    width: 100%;
    background-color: var(--nav-color);
    margin: 0 auto;
    padding: 0 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
nav .nav-bar .sidebarOpen{
    color: var(--text-color);
    font-size: 25px;
    padding: 5px;
    cursor: pointer;
    display: none;
}


nav .nav-bar .logo a{
    font-size: 25px;
    font-weight: 500;
    color: var(--text-color);
    text-decoration: none;
}


.menu .logo-toggle{
    display: none;
}


.nav-bar .nav-links{
    display: flex;
    align-items: center;
}


.nav-bar .nav-links li{
    margin: 0 5px;
    list-style: none;
}

.nav-links li a{
    position: relative;
    font-size: 17px;
    font-weight: 400;
    color: var(--text-color);
    text-decoration: none;
    padding: 10px;
}


.nav-links li a::before{
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 6px;
    width: 6px;
    border-radius: 50%;
    background-color: var(--text-color);
    opacity: 0;
    transition: all 0.3s ease;
}


.nav-links li:hover a::before{
    opacity: 1;
}



body.dark .search-field input{
    color: var(--text-color);
}





body.dark .search-field i{
    color: var(--text-color);
}


@media (max-width: 790px) {

    nav .nav-bar .sidebarOpen{
        display: block;
    }

    .menu{
        position: fixed;
        height: 100%;
        width: 320px;
        left: -100%;
        top: 0;
        padding: 20px;
        background-color: var(--side-nav);
        z-index: 100;
        transition: all 0.4s ease;
    }


    nav.active .menu{
        left: 0;
    }


    nav.active .nav-bar .navLogo a{
        opacity: 0;
        transition: all 0.3s ease;
    }


    .menu .logo-toggle{
        display: block;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }


    .logo-toggle .siderbarClose{
        color: var(--text-color);
        font-size: 24px;
        cursor: pointer;
    }
    .nav-bar .nav-links{
        flex-direction: column;
        padding-top: 30px;
    }

    .nav-links li a{
        display: block;
        margin-top: 20px;
    }
}
</style>
</head>
<body onload="togglePopup()">

<header>








<nav>
        <div class="nav-bar">
            
            
            <span class="logo navLogo">
                
                <a href="index.php"><img src="./img/logoH1.png" alt="vvvv" width="40%"></a>
            </span>

                <ul class="nav-links">
                    <li><a href="about.php">About</a></li>
                    <li><a href="panier.php">Panier</a></li>
                    <li><a href="login.php">Connexion</a></li>  
                </ul>
            </div>
            <div class="darkLight-searchBox">
                

                <div class="dark-light">
                    <i class='bx bx-moon moon'></i> 
                    <i class='bx bx-sun sun'></i>  
                </div>
            
        </div>
    </nav>



    <script src="script.js"></script>