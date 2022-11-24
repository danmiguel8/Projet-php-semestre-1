<div class="container">
    <h3>Liste des rayons</h3>
    <table>
        <tr>
            <th>RAYON</th>
        </tr>
        <?php foreach($rayons as $val):  ?>
            <tr>
                <th>
                    <?php 
                        echo($val["nom"]);
                    ?>
                </th>
            </tr>
        <?php endforeach ?>
    </table>
</div>