<form action="?controller=livre&action=all_auteur_list" method="POST">
    <fieldset>
        <select name="nomAuteur" id="nomAuteur">
            <legend>Recherche par auteur</legend>
            <?php foreach ($auteur as $a) : ?>
                <option value="<?= $a->nomAuteur ?>"><?= $a->nomAuteur ?></option>
            <?php endforeach ?>
            <input type="submit" value="Rechercher">
        </select>
    </fieldset>
</form>

<?php if ($position !== 1) : ?>
    <table class='table'>
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Titre</th>
                <th>Thème</th>
                <th>Nombre de pages</th>
                <th>Format</th>
                <th>Auteur</th>
                <th>Editeur</th>
                <th>Année édition</th>
                <th>Prix</th>
                <th>Langue</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($auteur_list as $a) : ?>
                <tr>
                    <td class="td"> <?= $a->isbn ?> </td>
                    <td class="td"> <?= $a->titre ?> </td>
                    <td class="td"> <?= $a->theme ?> </td>
                    <td class="td"> <?= $a->nombreDePage ?> </td>
                    <td class="td"> <?= $a->format ?> </td>
                    <td class="td"> <?= $a->nomAuteur ?> <?= $a->prenomAuteur ?></td>
                    <td class="td"> <?= $a->editeur ?> </td>
                    <td class="td"> <?= $a->anneeEdition ?> </td>
                    <td class="td"> <?= $a->prix ?> </td>
                    <td class="td"> <?= $a->langue ?> </td>
                    <td><a href='?controller=livre&action=update_livre&id=<?= $l->id ?>'><i class=" fa-solid fa-pen"></i></a></td>
                    <td><a href='javascript:void(0)' onclick='confirmDelete(" . $livres->id . ")' style='color: red;'><i class='fa fa-trash'></i></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    <?php endif; ?>