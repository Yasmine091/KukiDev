<?php
require ('core/config.php');
require ('core/func.php');

if(!isset($logged) && $logged != true) {
    header('Refresh: 0; URL=/');
    exit();
}

include ('tpl/header.php');

$usrd = "SELECT * FROM users WHERE id='$usrid' LIMIT 1";
$res = mysqli_query($con, $usrd);
$usr = mysqli_fetch_assoc($res);

?>

<script type="text/javascript">
  function settprev() {
  document.getElementById("pr-picture").src = document.getElementById("picture-s").value;
  document.getElementById("pr-banner").src = document.getElementById("banner-s").value;
  }

  document.getElementById("prev-btn").addEventListener('click', settprev);
</script>

<section id="sec-def">
<div class="card bg-dark text-white border-light mb-3">
  <div id="box-title" class="card-header text-<?php echo $wbcnf['text-var'] ?>">Préférences</div>
  <div class="card-body">
  	<form method="POST" class="form-group">
        <?php
        if(isset($_POST['snd-s1'])) {
          if(empty($_POST['user-s'])) {
            echo '<div class="alert bg-danger text-light" role="alert"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Veuillez inscrire un nom d\'utilisateur valide</div>';
          }
        }
        ?>
      	<label for="user-s">Nom d'utilisateur:</label>
      	<input type="text" class="form-control border-dark" maxlength="30" name="user-s" placeholder="Ex: Stephane52" id="user-r" value="<?php echo $usr['user']; ?>">
      	<br>
      	<label for="motto-s">Humeur:</label>
      	<input type="text" class="form-control border-dark" maxlength="30" name="motto-s" placeholder="Ex: Bienvenue au site!" id="motto-s" value="<?php echo $usr['motto']; ?>">
      	<br><br>
      	<input type="submit" class="btn btn-dark border-light" value="Sauvegarder" name="snd-s1" style="width: 100%;">
      	<hr>
      	<br>

        <?php
        if(isset($_POST['snd-s2'])) {


          $semail = $_POST['email-s'];
          $spw = $_POST['lpw-s'];
          $spwha = $usr['password'];
          $spwv = password_verify($spw, $spwha);

          if(empty($_POST['email-s']) or empty($_POST['lpw-s'])) {
            echo '<div class="alert bg-danger text-light" role="alert"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Veuillez completer tous les champs</div>';
          } elseif($usr['id'] == $usrid and $usr['password'] == $spwv) {
      echo '<div class="alert bg-success text-light" role="alert"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;L\'adresse mail a s\'est enregistré!</div>';

      $sql = mysqli_query("UPDATE users SET email='$semail' WHERE id='$usrid'");

        } else {
      echo '<div class="alert bg-danger text-light" role="alert"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Mot de passe erroné</div>';
      }
    }
        ?>

        <label for="email-s">E-mail:</label>
        <input type="text" class="form-control border-dark" maxlength="120" name="email-s" placeholder="Ex: steph.52@gmail.com" id="email-s" value="<?php echo $usr['email']; ?>">
        <br>
      	<label for="lpw-s">Mot de passe:</label>
      	<input type="password" class="form-control border-dark" maxlength="30" name="lpw-s" placeholder="Confirmez votre mot de passe" id="lpw-s">
      	<br><br>
      	<input type="submit" class="btn btn-dark border-light" value="Sauvegarder" name="snd-s2" style="width: 100%;">
        <br><br>
        <hr>

        <?php
        if(isset($_POST['snd-s3'])) {
          if(empty($_POST['picture-s']) or empty($_POST['banner-s'])) {
            echo '<div class="alert bg-danger text-light" role="alert"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Veuillez completer tous les champs</div>';
          }
        }
        ?>

      	<label for="picture-s">Photo de profil:</label>
        <input type="text" class="form-control border-dark" maxlength="500" name="picture-s" placeholder="Ex: i.imgur.com/asdf.png" id="picture-s" value="<?php echo $usr['picture']; ?>">
        <br>
      	<label for="banner-s">Bannière:</label>
        <input type="text" class="form-control border-dark" maxlength="500" name="banner-s" placeholder="Ex: i.imgur.com/asdf.png" id="banner-s" value="<?php echo $usr['banner']; ?>">
        <br><br>
        <div class="d-flex">
        <input type="button" onclick="settprev()" id="prev-btn" class="btn btn-dark border-light" data-toggle="modal" data-target="#preview" style="margin-right: 10px; width: 48%;" value="Avoir un aperçu">
        <input type="submit" class="btn btn-dark border-light" value="Sauvegarder" name="snd-s3" style="margin-left: 10px; width: 48%;">
      </div>
      	</form>

        <div class="modal fade" id="preview" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content bg-dark border-light text-light">
        <div class="modal-header border-bottom-0">
        <h5 class="modal-title">Aperçu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="text-light" aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <div class="d-flex">
      <img id="pr-picture" src="" class="card-img" style="width: 150px; height: 150px; object-fit: cover; margin-right: 10px;">
        <img id="pr-banner" src="" class="card-img" style="width: max-content; height: 150px; object-fit: cover;">
      </div>
        </div>
        <div class="modal-footer border-top-0">
        <button type="button" class="btn btn-dark border-light" data-dismiss="modal">Fermer</button>
        </div>
      </div>
      </div>
    </div>

<hr>
</div>

</section>
<?php
include ('tpl/right-def.php');
include ('tpl/footer.php');
?>