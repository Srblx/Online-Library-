    <form action="?controller=fournisseur&action=all_nom_fournisseur_list" method="POST" id="addForm">
        <fieldset>
            <legend>Recherche par nom fournisseur</legend>
            <select name="nom_fournisseur" id="nom_fournisseur">
                <?php foreach ($nom_fournisseur as $nf) : ?>
                    <option value="<?= $nf->nom_fournisseur ?>"><?= $nf->nom_fournisseur ?></option>
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
                <?php foreach ($nom_fournisseur_list as $nf) : ?>
                    <tr>
                        <td class="td"> <?= $nf->numero_commande ?> </td>
                        <td class="td"> <?= $nf->id_client ?> </td>
                        <td class="td"> <?= $nf->auteur_livre ?> </td>
                        <td class="td"> <?= $nf->titre_livre ?> </td>
                        <td class="td"> <?= $nf->rsociale_fournisseur ?> </td>
                        <td class="td"> <?= $nf->date_achat ?> </td>
                        <td class="td"> <?= $nf->prix_achat ?> </td>
                        <td class="td"> <?= $nf->nb_exemplaire ?> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        <?php endif ?>
        </table>