<?php
require ('core/config.php');
require ('core/func.php');
include ('tpl/header.php');
?>
<section id="sec-def">

<?php

$uid = $_GET['id'];

$usql = "SELECT * FROM users WHERE id = '$uid' OR user ='$uid'";
$ures = mysqli_query($con, $usql);
while($usrd = mysqli_fetch_assoc($ures)) {

	$raid = $usrd['rank'];
	$rasql = "SELECT * FROM rank WHERE num = '$raid'";
	$rres = mysqli_query($con, $rasql);
	$rand = mysqli_fetch_assoc($rres);

echo '
<div class="card bg-dark text-white border-light mb-3">
  <div id="box-title" class="card-header text-'.$wbcnf['text-var'].'">Profil de '.$usrd['user'].'</div>
  <div class="card-body">
  <img src="'.$usrd['banner'].'" class="card-img" style="width: 100%; height: 150px; object-fit: cover;"><hr>
  <div class="d-flex">
  <img src="'.$usrd['picture'].'" class="card-img" style="width: 150px; height: 150px; object-fit: cover; margin-right: 10px;">
    <p class="card-text" style="width: 74%; margin-bottom: 0px; flex: auto; margin-left: 10px;">
    <span class="form-control border-dark" style="margin-bottom: 5px; font-size: smaller;" readonly>Pseudo: '.$usrd['user'].'</span>
    <span class="form-control border-dark" style="margin-bottom: 5px; font-size: smaller;" readonly>Humeur: '.$usrd['motto'].'</span>
	<span class="form-control border-dark" style="margin-bottom: 5px; font-size: smaller;" readonly>Rang: 
	<span class="badge text-'.$rand['text-var'].'" style="background-color: '.$rand['bg-color'].'; font-size: smaller;">'.$rand['name'].'</span>
	</span>
	<span class="form-control border-dark" style="margin-bottom: 5px; font-size: smaller;" readonly>Création: '.$usrd['regdat'].'</span>
	</p>
	</div>
	<hr>
	<p class="card-text">
    <span class="form-control border-dark" rows="10" style="height: 150px; font-size: smaller;" readonly>Biographie:<br>'.$usrd['mybio'].'</span>
    </p>
</div>
';
}
?>

</section>
<?php
include ('tpl/right-def.php');
include ('tpl/footer.php');
?>