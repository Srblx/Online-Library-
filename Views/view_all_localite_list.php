<?php if (!empty($localite_list)) : ?>

    <form action="?controller=fournisseur&action=all_pays_list" method="POST">
    <fieldset>  
        <legend>Recherche par localité</legend> 
    <select name="localite" id="localite">
            <?php foreach ($localite as $l): ?>
                    <option value="<?= $l->localite ?>"><?= $l->localite ?></option>
                <?php endforeach ?>
                <input type="submit" value="Rechercher">
            </fieldset>
            </select>
        </form> <?php endif; ?>
<table class='table table-bordered table-responsive-md bg_table'>
    <thead>
        <tr>
            <th>code_fournisseur</th>
            <th>raison_social</th>
            <th>rue_fournisseur</th>
            <th>code_postal</th>
            <th>localite</th>
            <th>pays</th>
            <th>tel_fournisseur</th>
            <th>url_fournisseur</th>
            <th>mail_fournisseur</th>
            <th>fax</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($localite_list as $l) : ?>
            <tr>
                <td> <?= $l->code_fournisseur ?> </td>
                <td> <?= $l->raison_social ?> </td>
                <td> <?= $l->rue_fournisseur ?> </td>
                <td> <?= $l->code_postal ?> </td>
                <td> <?= $l->localite ?> </td>
                <td> <?= $l->pays ?> </td>
                <td> <?= $l->tel_fournisseur ?> </td>
                <td> <?= $l->url_fournisseur ?> </td>
                <td> <?= $l->mail_fournisseur ?> </td>
                <td> <?= $l->fax_fournisseur ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
