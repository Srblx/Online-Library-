<form action="?controller=fournisseur&action=all_raison_social_list" method="POST" id="addForm">
    <fieldset>
        <legend>Recherche par raison sociale</legend>
    <select name="raison_social" id="raison_social">
            <?php foreach ($raison_social as $rs) : ?>
                <option value="<?= $rs->raison_social ?>"><?= $rs->raison_social ?></option>
            <?php endforeach ?>
            <input type="submit" value="Rechercher">
        </select>
    </fielset>
</form>

        <?php if ($position !== 1) : ?>
            <table class='table '>
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
                    <?php foreach ($raison_social_list as $rs) : ?>
                        <tr>
                            <td class="td"> <?= $rs->code_fournisseur ?> </td>
                            <td class="td"> <?= $rs->raison_social ?> </td>
                            <td class="td"> <?= $rs->rue_fournisseur ?> </td>
                            <td class="td"> <?= $rs->code_postal ?> </td>
                            <td class="td"> <?= $rs->localite ?> </td>
                            <td class="td"> <?= $rs->pays ?> </td>
                            <td class="td"> <?= $rs->tel_fournisseur ?> </td>
                            <td class="td"> <?= $rs->url_fournisseur ?> </td>
                            <td class="td"> <?= $rs->mail_fournisseur ?> </td>
                            <td class="td"> <?= $rs->fax_fournisseur ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            <?php endif; ?>