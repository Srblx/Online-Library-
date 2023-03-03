<form action="#" method="post" id="formAdd">
        <fieldset>
            <legend id="legend"><b>Ajouter un livre</b></legend>
            <label for="isbn">ISBN :</label>
            <input type="text" name="isbn" id="isbn">
            <label for="titre">Titre :<sup>*</sup></label>
            <input type="text" name="titre" id="titre" required>
            <label for="theme">Theme :</label>
            <input type="text" name="theme" id="theme">
            <label for="nbPage">Nombre de pages :</label>
            <input type="text" name="nbPage" id="nbPage">
            <label for="format">Format </label>
            <input type="text" name="format" id="format">
            <label for="nomAuteur">Nom de l'auteur :<sup>*</sup></label>
            <input type="text" name="nomAuteur" id="nomAuteur" required>
            <label for="prenomAuteur">Prénom de l'auteur :<sup>*</sup></label>
            <input type="text" name="prenomAuteur" id="prenomAuteur" required>
            <label for="editeur">Editeur :</label>
            <input type="text" name="editeur" id="editeur">
            <label for="anneeEdition">Année d'édition :</label>
            <input type="text" name="anneeEdition" id="anneeEdition">
            <label for="prix">Prix :</label>
            <input type="text" name="prix" id="prix">
            <label for="langue">Langue : </label>
            <input type="text" name="langue" id="langue">
            <input type="submit" value="Ajouter" id="submit">
        </fieldset>
    </form>
