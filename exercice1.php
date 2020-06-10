<!--Exercice 1 Variable-->
<?php 
    $title = 'Exercice 1';

    include 'header.php';
?>

<h1>exercice1 </h1>
<p> <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
<p> <?php echo $_SERVER['HTTP_USER_AGENT']; ?> </p>
<p> <?php echo $_SERVER['SERVER_NAME']; ?> </p>

<?php
    include 'footer.php';
?>