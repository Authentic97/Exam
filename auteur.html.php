<?php 
$auteurs=find_all_auteur();
?>
<div class="conteneur">
    <div class="mod">
        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Profession</th>
            </tr>
            <?php foreach ($auteurs as $value):?>
                <tr>
                    <td><?= $value['nom']?></td>
                    <td><?= $value['prenom']?></td>
                    <td><?= $value['profession']?></td>
                </tr>
            <?php endforeach?>
        </table>
    </div>
</div>