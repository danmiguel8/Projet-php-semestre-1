
<div class="container">
    <h3>Liste les oeuvres disponibles</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>CODE</th>
            <th>TITRE</th>
            <th>AUTEUR</th>
            <th>EDITION</th>
            <th>RAYON</th>
            <th>STATUT</th>
        </tr>
        <?php foreach($oeuvre as $val):  ?>
            <?php if($val["statut"]=="dispo"): ?>
            <tr>
                <td>
                    <?=$val["id"] ?>
                </td>
                <td>
                    <?=$val["code"] ?>
                </td>
                <td>
                    <?=$val["titre"] ?>
                </td>
                <td>
                    <?=$val["auteur_id"] ?>
                </td>
                <td>
                    <?=$val["edition"] ?>
                </td>
                <td>
                <?=$val["rayon_id"] ?>
                </td>
                <td>
                <?=$val["statut"] ?>
                </td>
            </tr>
            <?php endif ?>
         <?php endforeach ?>
    </table>
</div>