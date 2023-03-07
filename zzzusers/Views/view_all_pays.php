
    
    <form action="?controller=fournisseur&action=all_pays_list" method="POST" id="addForm">
    <fieldset>  
        <legend>Recherche par pays</legend>     
    <select name="pays" id="pays">
            <?php foreach ($pays as $p): ?>
                <option value="<?= $p->pays ?>"><?= $p->pays ?></option>
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
                    <th>fax_fournisseur</th>
                </tr>
            </thead>
            <?php foreach ($pays_list as $p) : ?>
    <tbody>
            <tr>
                <td class="td"> <?= $p->code_fournisseur ?> </td>
                <td class="td"> <?= $p->raison_social ?> </td>
                <td class="td"> <?= $p->rue_fournisseur ?> </td>
                <td class="td"> <?= $p->code_postal ?> </td>
                <td class="td"> <?= $p->localite ?> </td>
                <td class="td"> <?= $p->pays ?> </td>
                <td class="td"> <?= $p->tel_fournisseur ?> </td>
                <td class="td"> <?= $p->url_fournisseur ?> </td>
                <td class="td"> <?= $p->mail_fournisseur ?> </td>
                <td class="td"> <?= $p->fax_fournisseur ?> </td>
            </tr>
        <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
