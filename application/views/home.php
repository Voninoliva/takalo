
  <div class="box" style="margin-top:40%;"></div>
  <div class="tile is-ancestor" style="display: grid; grid-template-columns:500px 500px 500px; margin-top:100px; margin-left:50px;">
            <?php foreach ($row as $ligne) { ?>
            <div class="tile is-parent" >
                <div class="tile is-child" style="width: 300px; padding: 10px;">
                    <div class="block is-align-self-center has-background-grey-lighter" style="text-align:center;" >
                        <figure >
                            <img src="<?php echo site_url('/assets/img/'.$ligne['photo']); ?>" alt="" class="mx-6" style="width: 225px; height: 225px;">
                        </figure>

                    <div class="block" style="padding-bottom:15px;">
                        <p>
                            <?php echo $ligne['nom']; ?> 
                        </p>
                        <p style="font-family: 'font-bold';">
                            Ariary <?php echo $ligne['prixEstimatif']; ?>
                        </p>
                        <button style="padding:7px; width:125px; font-size:15px; border:none; border-radius:3px; background-color: #F7DE3A; "><a href="">Echanger</a></button>
                        <button style="padding:7px; width:125px; font-size:15px; border:none; border-radius:3px; background-color: #F7DE3A; "><a href="<?php echo site_url('affichage/detailObj/'.$ligne['idObjet']); ?>">Details</a></button>
                    </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>