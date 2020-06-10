
<?php 
    $title = 'otherPage';
    include 'header.php';

    session_start();
?>

<p> <?php echo $_SESSION["hello"]; ?> </p>
<p> <?php echo $_SESSION["lastname"]; ?> </p>
<p> <?php echo $_SESSION["firstname"]; ?> </p>
<p> <?php echo $_SESSION["age"]; ?> </p>

<?php
    include 'footer.php';
?>