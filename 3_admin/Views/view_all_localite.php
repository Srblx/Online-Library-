<form action="?controller=fournisseur&action=all_localite_list" method="POST" id="addForm">
    <fieldset>  
    <legend>Recherche par localité</legend> 
    <select name="localite" id="localite">
    <?php foreach ($localite as $l): ?>
            <option value="<?= $l->localite ?>"><?= $l->localite ?></option>
        <?php endforeach ?>
        <input type="submit" value="Rechercher">
    </fieldset>
    </select>
</form>
<?php if($position !== 1) : ?>
<table class='table'>
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
                <td class="td"> <?= $l->code_fournisseur ?> </td>
                <td class="td"> <?= $l->raison_social ?> </td>
                <td class="td"> <?= $l->rue_fournisseur ?> </td>
                <td class="td"> <?= $l->code_postal ?> </td>
                <td class="td"> <?= $l->localite ?> </td>
                <td class="td"> <?= $l->pays ?> </td>
                <td class="td"> <?= $l->tel_fournisseur ?> </td>
                <td class="td"> <?= $l->url_fournisseur ?> </td>
                <td class="td"> <?= $l->mail_fournisseur ?> </td>
                <td class="td"> <?= $l->fax_fournisseur ?> </td>
            </tr>
        <?php endforeach; ?>
        <?php endif; ?>
    </tbody>


