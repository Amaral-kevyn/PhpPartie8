<!--Exercice 3 Variable-->
<?php
    if (isset($_POST['LOGIN'])){
    setcookie('username',$_POST['user'], time() + 365*24*3600,'/');
    setcookie('password',$_POST['password2'], time() + 365*24*3600,'/');
}

    $title = 'Exercice 3';
    include 'header.php';
    
?>

<h1>Exercice 3</h1>
<form action="" method="POST">
<label><b>Nom d'utilisateur</b></label>
<input type="text" placeholder="Entrer le nom d'utilisateur" name="user" required>

<label><b>Mot de passe</b></label>
<input type="password" placeholder="Entrer le mot de passe" name="password2" required>

<input type="submit" id='submit' name='LOGIN' >

</form>

<?php 
    include 'footer.php';
?>