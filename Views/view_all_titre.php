
    <form action="?controller=livre&action=all_titre_list" method="POST">
    <fieldset>  
        <legend>Recherche par titre</legend>      
    <select name="titre" id="titres">
            <?php foreach ($titre as $t): ?>
                    <option value="<?= $t->titre ?>"><?= $t->titre ?></option>
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
        <?php foreach ($titre_list as $t) : ?>
            <tr>
                <td> <?= $t->isbn ?> </td>
                <td> <?= $t->titre ?> </td>
                <td> <?= $t->theme ?> </td>
                <td> <?= $t->nombreDePage ?> </td>
                <td> <?= $t->format ?> </td>
                <td> <?= $t->nomAuteur ?> <?= $t->prenomAuteur ?></td>
                <td> <?= $t->editeur ?> </td>
                <td> <?= $t->anneeEdition ?> </td>
                <td> <?= $t->prix ?> </td>
                <td> <?= $t->langue ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

 
<?php endif; ?>