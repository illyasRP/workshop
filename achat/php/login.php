<?php 
session_start();




if(isset($_POST['uname']) && 
   isset($_POST['pass'])){

    include "../db_conn.php";

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "uname=".$uname;
    
    if(empty($uname)){
    	$em = "User name is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }else {
    	$sql = "SELECT * FROM users WHERE uname=?";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$uname]);

      $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
      


      if(isset($users[0])){
         $user = $users[0];
          $username =  $user['uname'];
          $u_password =  $user['password'];
          $fname =  $user['fname'];
          $id =  $user['id'];
          $role =  $user['role'];

          if(isset($_post['valider'])){
            if(!empty($_post['fname']) AND !empty($_post['password'])){
                $pseudo_par_defaut = "admin";
                $mot_de_passe_par_defaut = "admin";
        
                $pseudo_saisi = htmlspecialchars($_POST['fname']);
                $mdp_saisi = htmlspecialchars($_POST['password']);
        
                if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mot_de_passe_par_defaut){
                    $_SESSION['pass'] = $mdp_saisi;
                    header('Location: adminer.php');
        
                }
            }
        
            }


          if($username === $uname){
             if(password_verify($_POST["pass"], $u_password)){
                 $_SESSION['id'] = $id;
                 $_SESSION['fname'] = $fname;
                 $_SESSION['role'] = $role;
                 header("Location: /achat/user12.php");
                 exit;
             }else {
               $em = "Incorect User name or password";
               header("Location: ../login.php?error=$em&$data");
               exit;
            }

            

          }else {
            $em = "Incorect User name or password";
            header("Location: ../login.php?error=$em&$data");
            exit;
         }

      }else {
         $em = "Incorect User name or password";
         header("Location: ../login.php?error=$em&$data");
         exit;
      }
    }


}else {
	header("Location: ../login.php?error=error");
	exit;
}