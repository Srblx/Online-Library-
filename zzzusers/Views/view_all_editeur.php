
<form action="?controller=livre&action=all_editeur_list" method="POST" id="addForm">
            <select name="editeur" id="editeur">
            <fieldset>  
        <legend>Recherche par éditeur</legend> 
            <?php foreach ($editeur as $e): ?>
                    <option value="<?= $e->editeur ?>"><?= $e->editeur ?></option>
                <?php endforeach ?>
                <input type="submit" value="Rechercher">
                </fieldset>
            </select>
        </form>
            
        <?php if($position !== 1) : ?>
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
        </tr>
    </thead>
    <tbody>
        <?php foreach ($editeur_list as $e) : ?>
            <tr>
                <td class="td"> <?= $e->isbn ?> </td>
                <td class="td"> <?= $e->titre ?> </td>
                <td class="td"> <?= $e->theme ?> </td>
                <td class="td"> <?= $e->nombreDePage ?> </td>
                <td class="td"> <?= $e->format ?> </td>
                <td class="td"> <?= $e->nomAuteur ?> <?= $e->prenomAuteur ?></td>
                <td class="td"> <?= $e->editeur ?> </td>
                <td class="td"> <?= $e->anneeEdition ?> </td>
                <td class="td"> <?= $e->prix ?> </td>
                <td class="td"> <?= $e->langue ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
<?php endif; ?>