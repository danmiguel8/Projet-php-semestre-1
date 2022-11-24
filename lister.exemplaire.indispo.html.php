<div class="container">
    <h3>Liste des exemplaires indisponibles</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>CODE</th>
            <th>EXEMPLAIRE</th>
            <th>DATE ENREGISTREMENT</th>
            <th>STATUT</th>
        </tr>
        <?php foreach($ex as $val):  ?>
            <?php if($val["statut"]=="en pret" || $val["statut"]=="deteriore"): ?>
            <tr>
            <td>
                    <?=$val["id"] ?>
                </td>
                <td>
                    <?=$val["code"] ?>
                </td>
                <td>
                    <?=$val["ouvrage_id"] ?>
                </td>
                <td>
                    <?=$val["date enregistrement"] ?>
                </td>
                <td>
                    <?=$val["statut"] ?>
                </td>
            </tr>
            <?php endif ?>
         <?php endforeach ?>
    </table>
</div>