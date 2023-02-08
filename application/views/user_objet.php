
<section class="section">
<?php for($i=0;$i<count($all);$i++){   ?>
<div class="tile is-ancestor">
<div class="tile is-parent is-vertical is-6">
                    <div class="tile is-child has-background-white-ter card is-shadowless">
                        <div class="card-content">
                            <div class="content">
                                <div class="tile is-ancestor">
                                    <div class="tile is-parent is-6">
                                        <div class="tile is-child">
                                            <div class="content">
                                                <h2><?php echo $all[$i]['nom']; ?></h2>
                                                <p><?php echo $all[$i]['descri']; ?>,prix=<?php echo $all[$i]['prixEstimatif']; ?>Ar 
                                                </p>
                                                <div class="container">
                                                    <a href="<?php  echo site_url('user/formModif/'.$all[$i]['idObjet']);    ?>" class="button is-pulled-right">Update</a>
                                                </div>
                                                <div class="container">
                                                    <a href="<?php echo site_url('user/delete/'.$all[$i]['idObjet']); ?>" class="button is-pulled-right">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile is-parent">
                                        <div class="tile is-child">
                                            <figure class="image is-5by4">
                                                <img src="<?php  echo base_url('assets/img/'.$all[$i]['photo'] );?>" alt="Placeholder image">
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
<a href="<?php echo site_url('user/formAddObj'); ?>">ajouter un objet</a>
</section>
