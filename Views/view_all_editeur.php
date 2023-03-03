
<form action="?controller=livre&action=all_editeur_list" method="POST">
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
<table class='table table-bordered table-responsive-md bg_table'>
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
                <td> <?= $e->isbn ?> </td>
                <td> <?= $e->titre ?> </td>
                <td> <?= $e->theme ?> </td>
                <td> <?= $e->nombreDePage ?> </td>
                <td> <?= $e->format ?> </td>
                <td> <?= $e->nomAuteur ?> <?= $e->prenomAuteur ?></td>
                <td> <?= $e->editeur ?> </td>
                <td> <?= $e->anneeEdition ?> </td>
                <td> <?= $e->prix ?> </td>
                <td> <?= $e->langue ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
<?php endif; ?>