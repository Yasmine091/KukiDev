<?php
require ('core/config.php');
require ('core/func.php');
include ('tpl/header.php');
?>
<section id="sec-def">

<?php
/*
$ttcn = "SELECT count(*) FROM news ORDER BY id DESC LIMIT 10";
$tcres = mysqli_query($con, $ttcn);
$tcnws = mysqli_fetch_array($tcres);
$totalcount = $tcnws['count(*)'];
*/

$nsql = "SELECT * FROM news ORDER BY id DESC LIMIT 10";
$nres = mysqli_query($con, $nsql);
while($nws = mysqli_fetch_assoc($nres)) {

$anid = $nws['autor'];

$usql = "SELECT * FROM users WHERE id ='$anid' LIMIT 1";
$ures = mysqli_query($con, $usql);
$aws = mysqli_fetch_assoc($ures);

echo '

        <article>
        <div class="card bg-dark text-white border-light">
        <img class="card-img" style="height: 170px; object-fit: cover;" src="'.$nws['img'].'" alt="Card image">
        <div class="card-img-overlay">
        <h5 class="card-title">'.$nws['title'].'</h5>
        <p class="card-text" style="height: 48px;">'.$nws['summary'].'</p>
        <p class="badge badge-light">'.$nws['category'].'</p>
        <a href="profile/'.$aws['user'].'">
        <p class="badge badge-light">'.$aws['user'].'</p>
        </a> 
        <p class="badge badge-light">'.$nws['date'].'</p>
        <a href="article/'.$nws['id'].'" style="text-decoration: none; color: none;";><span class="btn btn-dark bg-transparent border-light float-right">Voir plus</span></a>
        </div>
        </div><br>
';
}
?>

</section>
<?php
include ('tpl/right-def.php');
include ('tpl/footer.php');
?>