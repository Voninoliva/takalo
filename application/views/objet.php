<div class="box"></div>
<div class="tile is-ancestor">
<div class="tile is-8" >
      <div class="card has-background-grey-lighter" style="width:1000px " >
        <div class="card-image" style="width:500px">
          <figure class="image is-4by3 is-7">
          <img src="<?php echo base_url('assets/img/'.$obj['photo']); ?>" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="media">
            <div class="media-left">
              
            </div>
            <div class="media-content">
              <p class="title is-4"><?php echo $obj['nom']; ?></p>
              <p class="subtitle is-6">Ar<?php echo $obj['prixEstimatif']; ?></p>
            </div>
          </div>

          <div class="content"><?php echo $obj['descri']; ?></div>
        </div>
      </div>
</div>
<div class="tile is-parent is-vertical">
                        <div class="tile is-child box has-background-success">
                            <p class="title"><?php echo $nowPers['email']; ?></p>
                            <p><?php echo $nowPers['nom']; ?> <?php echo $nowPers['prenom']; ?></p>
                            <?php echo $nowPers['contact']; ?>
                          </div>
                        <div class="tile is-child box ">
                            <p class="title">Historique</p>
                            <table class="table is-bordered is-fullwidth">
                                <thead>
                                    <tr>
                                        <th class="is-uppercase">Email</th>
                                        <th class="is-uppercase">Date echange</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php  for($t=0;$t<count($histo);$t++) { ?>
                                    <tr>
                                        <td class="is-capitalized"><?php echo $hPers[$t]['email']; ?></td>
                                        <td class="is-capitalized"><?php echo $histo[$t]['date']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
    </div>