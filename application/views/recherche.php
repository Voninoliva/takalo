<style>
    .box{
        margin-top: 5%;
    }
</style>
<div class="box">
<form action="<?php echo site_url('affichage/search'); ?>" method="post" class="field has-addons">
                            <div class="control">
                                <input class="input is-rounded" type="text" placeholder="*mot clé" style="font-family: 'font';" name="titre">
                                <select name="cat">
                                    <?php for($i=0;$i<count($all);$i++) { ?>
                                        <option value="<?php echo $all[$i]['idCategorie']; ?>"><?php echo $all[$i]['nom']; ?></option>
                                        <?php } ?>
                                </select>
                            </div>
                            <div class="control">
                                <button class="button is-rounded">
                                    <i class="fa-solid fa-magnifying-glass is-size-5"></i>
                                </button>
                            </div>
                        </form>
</div>