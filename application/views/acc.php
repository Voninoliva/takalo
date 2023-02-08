<section class="section">
<div class="tile is-ancestor">
    <?php for($i=0;$i<count($all);$i++) { 
        if($i%3==0 || $i%3==2) { ?>

            <div class="tile is-parent is-3">
                <div class="tile is-child hero is-medium notification has-background-dark">
                    <div class="hero-body">
                        <div class="container">
                            <h1><?php echo $all[$i]['nom']; ?></h1>
                        <figure class="image  is-4by3">
                            <img src="<?php echo site_url('/assets/img/'.$all[$i]['photo']); ?>" alt=""  class="mx-5" style="width: 155px; height: 105px;">
                        </figure>
                        </div>
                    </div>
                </div>
            </div>
    <?php } else { ?>
            <div class="tile is-parent">
                <div class="tile is-child hero is-medium notification has-background-danger">
                    <div class="hero-body">
                        <div class="container">
                        <h1><?php echo $all[$i]['nom']; ?></h1>
                        <figure class="image ">
                            <img src="<?php echo site_url('/assets/img/'.$all[$i]['photo']); ?>" alt="" class="mx-5" style="width: 155px; height: 105px;">
                        </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } } ?>
</section>