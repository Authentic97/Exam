<?php 
$auteurs=find_all_ouvrage();
?>
<div class="conteneur">
    <div class="mod">
        <table>
            <tr>
                <th>Code</th>
                <th>Titre</th>
                <th>Date d'édition</th>
                <th>Nombres d'auteur</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Profession</th>
            </tr>
            <?php foreach ($ouvrages as $value):?>
                <tr>
                    <td><?= $value['code']?></td>
                    <td><?= $value['titre']?></td>
                    <td><?= $value['date edition']?></td>
                    <td><?= $value['nombre auteur']?></td>
                </tr>
            <?php endforeach?>
        </table>
    </div>
</div>