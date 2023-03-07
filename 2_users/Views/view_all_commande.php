
<table class='table'>
    <thead>
        <tr>
            <th>Id_livre</th>
            <th>Id_fournisseur</th>
            <th>date achat</th>
            <th>prix achat </th>
            <th>Nombre d'exemplaire</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($commande as $c) : ?>
            <tr>
                <td class="td"> <?= $c->id_livre ?> </td>
                <td class="td"> <?= $c->id_fournisseur ?> </td>
                <td class="td"> <?= $c->date_achat ?> </td>
                <td class="td"> <?= $c->prix_achat ?> </td>
                <td class="td"> <?= $c->nb_exemplaire ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>


