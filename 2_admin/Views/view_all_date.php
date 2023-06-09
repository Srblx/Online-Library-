<div class="main">

    <form action="?controller=commande&action=all_date_list" method="POST" id="addForm">
        <fieldset>
            <legend>Recherche par localité</legend>
            <select name="date" id="date">
                <?php foreach ($date as $d) : ?>
                    <option value="<?= $d->date_achat ?>"><?= $d->date_achat ?></option>
                <?php endforeach ?>
                <input type="submit" value="Rechercher">
        </fieldset>
        </select>
    </form>

</div>

<?php if ($position !== 1) : ?>

    <table class='table'>
        <thead>
            <tr>
                <th>Numero de commande</th>
                <th>Auteur livre</th>
                <th>Titre livre</th>
                <th>Raison sociale fournisseur</th>
                <th>date achat</th>
                <th>prix achat </th>
                <th>Nombre d'exemplaire</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($date_list as $d) : ?>
                <tr>
                    <td class="td"> <?= $d->isbn ?> </td>
                    <td class="td"> <?= $d->nomAuteur ?> </td>
                    <td class="td"> <?= $d->titre ?> </td>
                    <td class="td"> <?= $d->raison_social ?> </td>
                    <td class="td"> <?= $d->date_achat ?> </td>
                    <td class="td"> <?= $d->prix_achat ?> </td>
                    <td class="td"> <?= $d->nb_exemplaire ?> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    <?php endif ?>
    </table>