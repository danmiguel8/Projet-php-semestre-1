<div class="container">
    <h3>Liste des exemplaires</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>CODE</th>
            <th>DATE ENREGISTREMENT</th>
            <th>OUVRAGE</th>
        </tr>
        <?php foreach($ex as $val):  ?>
            <tr>
                <td>
                    <?=$val["id"] ?>
                </td>
                <td>
                    <?=$val["code"] ?>
                </td>
                <td>
                    <?=$val["date enregistrement"] ?>
                </td>
                <td>
                    <?=$val["ouvrage_id"] ?>
                </td>
            </tr>
         <?php endforeach ?>
    </table>
</div>