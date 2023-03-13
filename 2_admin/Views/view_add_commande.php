<form action="?controller=commande&action=add_commande_bd" method="post" id="addForm">
    <fieldset>
        <legend>Ajouter une commande</legend>
        <select name="add_titre" id="add_titre">
            <?php foreach ($add_titre as $at) : ?>
                <option value="<?= $at->id ?>"><?= $at->titre ?></option>
            <?php endforeach ?>
        </select>
        <select name="add_rsociale" id="add_rsocial">
            <?php foreach ($add_rsocial as $ars) : ?>
                <option value="<?= $ars->id ?>"><?= $ars->raison_social ?></option>
            <?php endforeach ?>
        </select>
        <label for="date">Date du jour</label>
        <input type="date" name="date" id="date">
        <label for="prix">Prix du livre</label>
        <input type="number" placeholder="1.0" step="0.01" min="0" name="prix" id="prix">
        <label for="qte">Quantité</label>
        <input type="number" name="qte" id="qte">
        <input type="submit" value="Ajouter" name="submit">
    </fieldset>
</form>