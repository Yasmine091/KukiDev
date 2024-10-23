<?php
require ('core/config.php');
require ('core/func.php');

/*
if(isset($logged) && $logged === true) {
    header('Refresh: 0; URL=/');
    exit();
}

O

if(!isset($logged) && $logged != true) {
    header('Refresh: 0; URL=/');
    exit();
}
*/

include ('tpl/header.php');
?>

<section id="sec-def">
<div class="card bg-dark text-white border-light mb-3">
  <div id="box-title" class="card-header text-<?php echo $wbcnf['text-var'] ?>">BOX TITLE</div>
  <div class="card-body">
  <img src="img.gif" class="card-img" style="margin-bottom: 20px;"><hr>
    <h5 class="card-title">title</h5>
    <p class="card-text">text</p>
<hr>
</div>

</section>
<?php
include ('tpl/right-def.php');
include ('tpl/footer.php');
?>