
<section class="section">
    <form action="<?php echo site_url('AccueilAdmin/insertCategorie'); ?>" method="post">
        Nouvelle categorie : <input type="text" name="categorie" id="" placeholder="Nouvelle Categorie">
        <input type="submit" value="Ajouter">
    </form>
    <div class="box"></div>
<?php for($i=0;$i<count($nocategories);$i++){   ?>
<div class="tile is-ancestor">
    <div class="tile is-parent is-vertical is-6">
        <div class="tile is-child has-background-white-ter card is-shadowless">
            <div class="card-content">
                <div class="content">
                    <div class="tile is-ancestor">
                        <div class="tile is-parent is-6">
                            <div class="tile is-child">
                                <div class="content">
                                    <h2>
                                        <?php echo $nocategories[$i]['nom']; ?>
                                    </h2>
                                    <p>
                                        <?php echo $nocategories[$i]['descri']; ?>, prix=<?php echo $nocategories[$i]['prixEstimatif']; ?>Ar 
                                    </p>
                                    <div class="container">
                                        Categorie : 
                                        <form action="AccueilAdmin/validerCategorie" method="post">
                                            <select name="categorie" id="">
                                                <option value="">Categorie</option>
                                                <?php
                                                    for($j=0; $j<count($categories); $j++) {
                                                        ?>
                                                        <option value="<?php echo $categories[$j]['idCategorie']; ?>">
                                                            <?php echo $categories[$j]['nom']; ?>
                                                        </option>
                                                    <?php }
                                                ?>
                                            </select>
                                            <input type="hidden" name="idobjet" value="<?php echo $nocategories[$i]['idObjet']; ?>">
                                            <input type="submit" value="Valider">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <div class="tile is-child">
                                <figure class="image is-5by4">
                                    <img src="<?php  echo base_url('assets/img/'.$nocategories[$i]['photo'] );?>" alt="Placeholder image">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
</section>
