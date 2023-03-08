<form action="?controller=commande&action=add_commande_bd" method="post" id="addForm">
    <fieldset>
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
            <label for="qte">Quantité</label>
            <input type="number" name="qte" id="qte">
            <input type="submit" value="Ajouter" name="submit">
    </fieldset>
</form>