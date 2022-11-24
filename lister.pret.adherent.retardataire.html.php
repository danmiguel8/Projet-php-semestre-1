<div class="container">
    <?php date_default_timezone_set('UTC'); ?>
    <h3>Liste prêts adhérent retardataire</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>DATE</th>
            <th>DATE RETOUR PREVU</th>
            <th>DATE RETOUR REEL</th>
            <th>EXEMPLAIRE</th>
            <th>ADHERENT</th>
        </tr>
        <?php foreach($pret as $val):  ?>
            <?php if($val["date re reel"]>"01/11/2022" and $val["date re reel"]<date("j/m/a")): ?>
            <tr>
                <td>
                    <?=$val["id"] ?>
                </td>
                <td>
                    <?=$val["date"] ?>
                </td>
                <td>
                    <?=$val["date re prevu"] ?>
                </td>
                <td>
                    <?=$val["date re reel"] ?>
                </td>
                <td>
                    <?=$val["exemplaire_id"] ?>
                </td>
                <td>
                    <?=$val["adherent_id"] ?>
                </td>
            </tr>
            <?php endif ?>
         <?php endforeach ?>
    </table>
</div>