<table class='table'>
    <thead>
        <tr>
            <th>ISBN</th>
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
                <td class="td"> <?= $c->isbn ?> </td>
                <td class="td"> <?= $c->nomAuteur ?> </td>
                <td class="td"> <?= $c->titre ?> </td>
                <td class="td"> <?= $c->raison_social ?> </td>
                <td class="td"> <?= $c->date_achat ?> </td>
                <td class="td"> <?= $c->prix_achat ?> </td>
                <td class="td"> <?= $c->nb_exemplaire ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>