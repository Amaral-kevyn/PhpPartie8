<!--Exercice 5 Variable-->
<?php 
   
setcookie('username','lamain');
setcookie('password','ahah');

echo $_COOKIE['username'];
echo $_COOKIE['password'];
    
    $title = 'Exercice 5';

    include 'header.php';
?>

      
<?php 
    include 'footer.php';
?>