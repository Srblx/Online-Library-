<?php if (!empty($fournisseur)) : ?>
    Résultat de votre recherche :
    <br />


    <table class='table'>
        <thead>
            <tr>
                <th>Code fournisseur</th>
                <th>Raison Social</th>
                <th>Adresse </th>
                <th>code postal</th>
                <th>Localite</th>
                <th>Pays</th>
                <th>Téléphone</th>
                <th>Site</th>
                <th>Mail</th>
                <th>Fax</th>
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
    <?php endif; ?>
    </table>