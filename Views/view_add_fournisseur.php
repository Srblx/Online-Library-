<form action="?controller=fournisseur&action=add_fournisseur" method="POST" id="addForm">
        <fieldset>
            <legend id="legend"><b>Ajouter un fournisseur</b></legend>
            <label for="code_fournisseur">Code Fournisseur :<sup>*</sup></label>
            <input type="text" name="code_fournisseur" id="code_fournisseur">
            <label for="raison_social">Raison Sociale :<sup>*</sup></label>
            <input type="text" name="raison_social" id="raison_social" required>
            <label for="rue_fournisseur">Adresse Fournisseur :</label>
            <input type="text" name="rue_fournisseur" id="rue_fournisseur">
            <label for="code_postal">Code Postal :</label>
            <input type="text" name="code_postal" id="code_postal">
            <label for="localite">Localité :</label>
            <input type="text" name="localite" id="localite">
            <label for="pays">Pays :<sup>*</sup></label>
            <input type="text" name="pays" id="pays" required>
            <label for="tel_fournisseur">Téléphone :<sup>*</sup></label>
            <input type="text" name="tel_fournisseur" id="tel_fournisseur" required>
            <label for="url_fournisseur">Site Internet :</label>
            <input type="text" name="url_fournisseur" id="url_fournisseur">
            <label for="mail_fournisseur">E-mail :<sup>*</sup></label>
            <input type="text" name="mail_fournisseur" id="mail_fournisseur">
            <label for="fax_fournisseur">Fax :</label>
            <input type="text" name="fax_fournisseur" id="fax_fournisseur">
            <input type="submit" value="Ajouter" name="submit" id="submit">
        </fieldset>
    </form>