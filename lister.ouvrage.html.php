
<div class="container">
    <h3>Liste des ouvrages</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>CODE</th>
            <th>TITRE</th>
            <th>AUTEUR</th>
            <th>EDITION</th>
            <th>RAYON</th>
        </tr>
        <?php foreach($oeuvre as $val):  ?>
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
            </tr>
         <?php endforeach ?>
    </table>
</div>