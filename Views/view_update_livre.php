<form action="?controller=livre&action=update_livre" method="post" id="addForm">

    <fieldset>
        <legend id="legend"><b>Modifier les informations d'un livre</b></legend>
        <input type="hidden" name="id" value="<?= $livre['id'] ?>">
        <label for="isbn">ISBN :</label>
        <input type="text" name="isbn" id="isbn" value="<?= $livre['isbn'] ?>">
        <label for="titre">Titre :<sup>*</sup></label>
        <input type="text" name="titre" id="titre" value="<?= $livre['titre'] ?>">
        <label for="theme">Theme :</label>
        <input type="text" name="theme" id="theme" value="<?= $livre['theme'] ?>">
        <label for="nbPage">Nombre de pages :</label>
        <input type="text" name="nbPage" id="nbPage" value="<?= $livre['nombreDePage'] ?>">
        <label for="format">Format :</label>
        <input type="text" name="format" id="format" value="<?= $livre['format'] ?>">
        <label for="nomAuteur">Nom de l'auteur :<sup>*</sup></label>
        <input type="text" name="nomAuteur" id="nomAuteur" value="<?= $livre['nomAuteur'] ?>">
        <label for="prenomAuteur">Prénom de l'auteur :<sup>*</sup></label>
        <input type="text" name="prenomAuteur" id="prenomAuteur" value="<?= $livre['prenomAuteur'] ?>">
        <label for="editeur">Editeur :</label>
        <input type="text" name="editeur" id="editeur" value="<?= $livre['editeur'] ?>">
        <label for="anneeEdition">Année d'édition :</label>
        <input type="text" name="anneeEdition" id="anneeEdition" value="<?= $livre['anneeEdition'] ?>">
        <label for="prix">Prix :</label>
        <input type="text" name="prix" id="prix" value="<?= $livre['prix'] ?>">
        <label for="langue">Langue : </label>
        <input type="text" name="langue" id="langue" value="<?= $livre['langue'] ?>">
        <input type="submit" value="Modifier" name="submit" id="submit">
    </fieldset>
</form>