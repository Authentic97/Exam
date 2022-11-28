<?php 
$exemplaires=find_all_ouvrage();
?>
<div class="conteneur">
    <div class="mod">
        <table>
            <tr>
                <th>Code</th>
                <th>Date d'enregistrement</th>
            </tr>
            <?php foreach ($exemplaires as $value):?>
                <tr>
                    <td><?= $value['code']?></td>
                    <td><?= $value['date enregistrement']?></td>
                </tr>
            <?php endforeach?>
        </table>
    </div>
</div>