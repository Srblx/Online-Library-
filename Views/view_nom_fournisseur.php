    <?php //var_dump($nom_fournisseur); 
    ?>
    <form action="?controller=commande&action=nom_fournisseur_list" method="POST" id="addForm">
        <fieldset>
            <legend>Recherche par nom fournisseur</legend>
            <select name="nom_fournisseur" id="nom_fournisseur">
                <?php
                foreach ($nom_fournisseur as $nf) : ?>
                    <option value="<?= $nf->raison_social ?>"><?= $nf->raison_social ?></option>
                <?php endforeach ?>
                <input type="submit" value="Rechercher">
        </fieldset>
        </select>
    </form>

    <?php //if ($position !== 1) : 
    ?>

    <table class='table'>
        <thead>
            <tr>
                <th>Numero de commande</th>
                <th>ISBN</th>
                <th>Auteur livre</th>
                <th>Titre livre</th>
                <th>Raison sociale fournisseur</th>
                <th>date achat</th>
                <th>prix achat </th>
                <th>Nombre d'exemplaire</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // var_dump($nom_fournisseur_list);
            // die;
            ?>
            <?php foreach ($nom_fournisseur_list as $nf) : ?>
                <tr>
                    <td class="td"> <?= $nf->numero_commande ?> </td>
                    <td class="td"> <?= $nf->isbn ?> </td>
                    <td class="td"> <?= $nf->titre ?> </td>
                    <td class="td"> <?= $nf->nomAuteur ?> </td>
                    <td class="td"> <?= $nf->raison_social ?> </td>
                    <td class="td"> <?= $nf->date_achat ?> </td>
                    <td class="td"> <?= $nf->prix_achat ?> </td>
                    <td class="td"> <?= $nf->nb_exemplaire ?> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <?php //endif 
        ?>
    </table>