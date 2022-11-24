<div class="container">
    <h3>Liste prêts adhérent</h3>
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
         <?php endforeach ?>
    </table>
</div>