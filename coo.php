<!--Exercice 3 Variable-->
<?php 
    session_start();

    $title = 'coo';
    include 'header.php';
    
?>

<p> <?php echo $_SESSION["Username"]; ?> </p>
<p> <?php echo $_SESSION["password"]; ?> </p>


<?php 
    include 'footer.php';
?>