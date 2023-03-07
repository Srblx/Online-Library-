<form action="?controller=livre&action=all_titre_list" method="POST" id="addForm">
    <fieldset>
        <legend>Recherche par titre</legend>
        <select name="titre" id="titres">
            <?php foreach ($titre as $t) : ?>
                <option value="<?= $t->titre ?>"><?= $t->titre ?></option>
            <?php endforeach ?>
            <input type="submit" value="Rechercher">
    </fieldset>
    </select>
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
            <?php foreach ($titre_list as $t) : ?>
                <tr>
                    <td class="td"> <?= $t->isbn ?> </td>
                    <td class="td"> <?= $t->titre ?> </td>
                    <td class="td"> <?= $t->theme ?> </td>
                    <td class="td"> <?= $t->nombreDePage ?> </td>
                    <td class="td"> <?= $t->format ?> </td>
                    <td class="td"> <?= $t->nomAuteur ?> <?= $t->prenomAuteur ?></td>
                    <td class="td"> <?= $t->editeur ?> </td>
                    <td class="td"> <?= $t->anneeEdition ?> </td>
                    <td class="td"> <?= $t->prix ?> </td>
                    <td class="td"> <?= $t->langue ?> </td>
                    <td><a href='?controller=livre&action=update_livre&id=<?= $l->id ?>'><i class=" fa-solid fa-pen"></i></a></td>
                    <td><a href='javascript:void(0)' onclick='confirmDelete(" . $livres->id . ")' style='color: red;'><i class='fa fa-trash'></i></td>

                </tr>
            <?php endforeach; ?>
        </tbody>


    <?php endif; ?>