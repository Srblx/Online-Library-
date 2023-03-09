<form action="?controller=commande&action=all_titre_com_list" method="POST" id="addForm">
    <fieldset>
        <legend>Recherche par titre de livre</legend>
        <select name="titre_com" id="titre_com">
            <?php foreach ($titre_com as $t) : ?>
                <option value="<?= $t->id_livre ?>"><?= $t->titre ?></option>
            <?php endforeach ?>
            <input type="submit" value="Rechercher">
    </fieldset>
    </select>
</form>

<?php if ($position !== 1) : ?>

    <table class='table'>
        <thead>
            <tr>
                <th>Numero de commande</th>
                <th>Nom client</th>
                <th>Auteur livre</th>
                <th>Titre livre</th>
                <th>Raison sociale fournisseur</th>
                <th>date achat</th>
                <th>prix achat </th>
                <th>Nombre d'exemplaire</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($titre_com_list as $t) : ?>
                <tr>
                    <td class="td"> <?= $t->numero_commande ?> </td>
                    <td class="td"> <?= $t->isbn ?> </td>
                    <td class="td"> <?= $t->nomAuteur ?> </td>
                    <td class="td"> <?= $t->titre ?> </td>
                    <td class="td"> <?= $t->raison_social ?> </td>
                    <td class="td"> <?= $t->date_achat ?> </td>
                    <td class="td"> <?= $t->prix_achat ?> </td>
                    <td class="td"> <?= $t->nb_exemplaire ?> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    <?php endif ?>
    </table>