
<form action="?controller=livre&action=all_auteur_list" method="POST">
            <select name="nomAuteur" id="nomAuteur">
            <fieldset>
            <legend>Recherche par auteur</legend> 
            <?php foreach ($auteur as $a): ?>
                    <option value="<?= $a->nomAuteur ?>"><?= $a->nomAuteur ?></option>
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
        <?php foreach ($auteur_list as $a) : ?>
            <tr>
                <td> <?= $a->isbn ?> </td>
                <td> <?= $a->titre ?> </td>
                <td> <?= $a->theme ?> </td>
                <td> <?= $a->nombreDePage ?> </td>
                <td> <?= $a->format ?> </td>
                <td> <?= $a->nomAuteur ?> <?= $a->prenomAuteur ?></td>
                <td> <?= $a->editeur ?> </td>
                <td> <?= $a->anneeEdition ?> </td>
                <td> <?= $a->prix ?> </td>
                <td> <?= $a->langue ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
<?php endif; ?>