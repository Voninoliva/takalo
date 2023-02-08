<div class="box">
    <table class="table is-fullwidth">
        <tr>
            <th>NomPersonne1</th>
            <th>Objet1</th>
            <th>NomPersonne2</th>
            <th>Objet2</th>
            <th>Date de la demande</th>
        </tr>
        <?php for($i=0;$i<count($all);$i++) {  ?>
            <tr>
                <td><?php echo $p1[$i]['nom']; ?></td>
                <td><?php echo $o1[$i]['nom']; ?></td>
                <td><?php echo $p2[$i]['nom']; ?></td>
                <td><?php echo $o2[$i]['nom']; ?></td>
                <form method="post" action="<?php echo site_url(''); ?>">
                    <input type="hidden" name="p1" value="<?php echo $p1[$i]['id']; ?>">
                    <input type="hidden" name="p2" value="<?php echo $p2[$i]['id']; ?>">
                    <input type="hidden" name="o1" value="<?php echo $o1[$i]['id']; ?>">
                    <input type="hidden" name="o2" value="<?php echo $o2[$i]['id']; ?>">
                    <input type="hidden" name="registre" value="<?php echo $all[$i]['idRegistre']; ?>">
                    <input type="submit" name="Accepter">
                </form>
            </tr>
        <?php } ?>
    </table>
</div>