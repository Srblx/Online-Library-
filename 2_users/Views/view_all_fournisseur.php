<?php if(!empty($fournisseur)) : ?>
Résultat de votre recherche :
<br />


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
        <?php foreach ($fournisseur as $f) : ?>
            <tr>
                <td class="td"> <?= $f->code_fournisseur ?> </td>
                <td class="td"> <?= $f->raison_social ?> </td>
                <td class="td"> <?= $f->rue_fournisseur ?> </td>
                <td class="td"> <?= $f->code_postal ?> </td>
                <td class="td"> <?= $f->localite ?> </td>
                <td class="td"> <?= $f->pays ?> </td>
                <td class="td"> <?= $f->tel_fournisseur ?> </td>
                <td class="td"> <?= $f->url_fournisseur ?> </td>
                <td class="td"> <?= $f->mail_fournisseur ?> </td>
                <td class="td"> <?= $f->fax_fournisseur ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <?php endif;?>
</table>



     