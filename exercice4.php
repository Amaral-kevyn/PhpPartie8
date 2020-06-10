
<!--Exercice 4 Variable-->
<?php 
  
    $title = 'Exercice 4';
    include 'header.php';
?>

<h1>Exercice 4</h1>
<p>Salut tu t'appelle <?php echo $_COOKIE['username']; ?>.</p>
<p>Ton mot de passe est <?php echo $_COOKIE['password'];?>.</p>

<?php
    include 'footer.php';
?>