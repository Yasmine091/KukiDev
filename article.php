<?php
require ('core/config.php');
require ('core/func.php');
include ('tpl/header.php');
?>
<section id="sec-def">

<?php

$nid = $_GET['id'];

/*
$ttcn = "SELECT count(*) FROM news ORDER BY id DESC LIMIT 10";
$tcres = mysqli_query($con, $ttcn);
$tcnws = mysqli_fetch_array($tcres);
$totalcount = $tcnws['count(*)'];
*/

$nsql = "SELECT * FROM news WHERE id = '$nid'";
$nres = mysqli_query($con, $nsql);
while($nws = mysqli_fetch_assoc($nres)) {

$anid = $nws['autor'];

$usql = "SELECT * FROM users WHERE id ='$anid'";
$ures = mysqli_query($con, $usql);
$aws = mysqli_fetch_assoc($ures);

echo '
<div class="card bg-dark text-white border-light mb-3">
  <div id="box-title" class="card-header text-'.$wbcnf['text-var'].'">'.$nws['title'].'</div>
  <div class="card-body">
  <img src="'.$nws['img'].'" class="card-img float-left" style="height: 170px; margin-bottom: 20px;">
    <h5 class="card-title">'.$nws['summary'].'</h5>
    <p class="card-text">'.$nws['content'].'</p>
<hr>
    	<p class="badge badge-light">'.$nws['category'].'</p>
        <p class="badge badge-light">'.$aws['user'].'</p> 
        <p class="badge badge-light">'.$nws['date'].'</p>
        <a href="/" style="text-decoration: none; color: none;";><span class="btn btn-dark bg-transparent border-light float-right">Retour</span></a>
</div>
';
}
?>

</section>
<?php
include ('tpl/right-def.php');
include ('tpl/footer.php');
?>