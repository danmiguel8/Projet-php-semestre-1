<div class="container">
    <h3>Liste des prêts en cours</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>DATE</th>
            <th>DATE RETOUR PREVU</th>
            <th>DATE RETOUR REEL</th>
            <th>EXEMPLAIRE</th>
            <th>ADHERENT</th>
            <th>STATUT</th>
        </tr>
        <?php foreach($pret as $val):  ?>
            <?php if($val["statut"]=="en cours"): ?>
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
                <td>
                    <?=$val["statut"] ?>
                </td>
            </tr>
            <?php endif ?>
         <?php endforeach ?>
    </table>
</div>