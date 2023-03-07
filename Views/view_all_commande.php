<table class='table'>
    <thead>
        <tr>
            <th>Numero de commande</th>
            <th>Fournisseur</th>
            <th>Auteur</th>
            <th>Titre</th>
            <th>Raison Sociale</th>
            <th>Date achat</th>
            <th>Prix achat </th>
            <th>Nombre d'exemplaire</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($commande as $c) : ?>
            <tr>
                <td class="td"> <?= $c->numero_commande ?> </td>
                <td class="td"> <?= $c->id_fournisseur ?> </td>
                <td class="td"> <?= $c->auteur_livre ?> </td>
                <td class="td"> <?= $c->titre_livre ?> </td>
                <td class="td"> <?= $c->rsociale_fournisseur ?> </td>
                <td class="td"> <?= $c->date_achat ?> </td>
                <td class="td"> <?= $c->prix_achat ?> </td>
                <td class="td"> <?= $c->nb_exemplaire ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>