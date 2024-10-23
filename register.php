<?php
require ('core/config.php');
require ('core/func.php');

if(isset($logged) && $logged === true) {
    header('Refresh: 0; URL=/');
    exit();
}

include ('tpl/header.php');
?>
<section id="sec-def">      
      <article class="art-def">
      <div class="card bg-dark text-white border-light mb-3">
  <div id="box-title" class="card-header text-<?php echo $wbcnf['text-var'] ?>">Inscription</div>
  <div class="card-body">
<?php

//código del registro

if(isset($_POST['snd-r'])) {

$user = $_POST['user-r'];
$email = $_POST['email-r'];
$pw = $_POST['lpw-r'];
$pwha = password_hash($pw, PASSWORD_DEFAULT);

$usrc = "SELECT * FROM users WHERE user='$user' OR email='$email' LIMIT 1";
$res = mysqli_query($con, $usrc);
$usrl = mysqli_fetch_assoc($res);

if($usrl) {
if($usrl['user'] == $user) {
    echo '<div class="alert bg-danger text-light" role="alert"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Ce nom d\'utilisateur n\'est pas disponible</div>';
}
if($usrl['email'] == $email) {
    echo '<div class="alert bg-danger text-light" role="alert"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Cette adresse mail a déjà été utilisé</div>';
}
} elseif(empty($_POST['user-r']) or empty($_POST['email-r']) or empty($_POST['lpw-r'])) {
    echo '<div class="alert bg-danger text-light" role="alert"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Veuillez completer tous les champs</div>';
} else {
$usrip = $_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO users (user, email, password, regdat, ip) VALUES ('$user', '$email', '$pwha', CURDATE(), '$usrip')";

}

if (mysqli_query($con,$sql)) {
      echo '<div class="alert bg-success text-light" role="alert"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Inscription réussie</div></br>';

        aft_log();
}
}
?>
      	<form method="POST" class="form-group">
      	<label for="user-r">Nom d'utilisateur:</label>
      	<input type="text" class="form-control border-dark" maxlength="30" name="user-r" placeholder="Ex: Stephane52" id="user-r">
      	<br>
        <label for="email-r">E-mail:</label>
        <input type="text" class="form-control border-dark" maxlength="120" name="email-r" placeholder="Ex: steph.52@gmail.com" id="email-r">
        <br>
      	<label for="lpw-r">Mot de passe:</label>
      	<input type="password" class="form-control border-dark" maxlength="30" name="lpw-r" placeholder="Minimum 6 caractéres dont, une majuscule et un chiffre" id="lpw-r">
      	<!-- 
            Algún uso le daré a esto
            <br><br>
            <input type="checkbox"> Se souvenir de moi
            -->
      	<br><br>
      	<input type="submit" class="btn btn-dark border-light" value="S'inscrire" name="snd-r" style="width: 100%;">
      	</form>
</div>
      </article>
</section>
<?php
include ('tpl/right-def.php');
include ('tpl/footer.php');
?>