<!--Exercice 2 Variable-->
<?php 
    $title = 'Exercice 2';
    include 'header.php';
    
?>

<h1>Exercice 2</h1>

<?php
session_start();

$_SESSION["hello"]= 'Bonjour';
$_SESSION["lastname"]= 'Amaral';
$_SESSION["firstname"]='Kevyn';
$_SESSION["age"]= 27;
echo '<br /><a href="otherPage.php">page 2</a>';
?>

<?php 
    include 'footer.php';
?>