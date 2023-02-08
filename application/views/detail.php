<div class="box"></div>
<?php for($i=0;$i<count($rehetra);$i+=2) {  ?>
<div class="tile is-ancestor">
  <div class="tile is-parent">
    <article class="tile is-child box ">
      <p class="title"><?php echo $rehetra[$i]['categorie']; ?></p>
      <p class="subtitle"><?php echo $rehetra[$i]['nom']; ?></p>
      <img src=<?php echo base_url('assets/img/'.$rehetra[$i]['photo']);  ?> alt="not found" class="mx-6" style="width: 225px; height: 225px;">
    </article>
  </div>
 <?php  if($i+1<count($rehetra)) { ?>
  <div class="tile is-parent">
    <article class="tile is-child box ">
      <p class="title"><?php echo $rehetra[$i+1]['categorie']; ?></p>
      <p class="subtitle"><?php echo $rehetra[$i+1]['nom']; ?></p>
      <img src=<?php echo base_url('assets/img/'.$rehetra[$i+1]['photo']);  ?> alt="not found" class="mx-6" style="width: 225px; height: 225px;">
    </article>
  </div>
<?php } ?>
?>
</div>
<?php } ?>
<a href="<?php echo site_url('affichage/seeAll'); ?>">retour</a>
