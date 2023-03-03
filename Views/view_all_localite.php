<div class="main">

        <form action="?controller=fournisseur&action=all_localite_list" method="POST">
        <fieldset>  
        <legend>Recherche par localité</legend> 
            <select name="localite" id="localite">
            <?php foreach ($localite as $l): ?>
                    <option value="<?= $l->localite ?>"><?= $l->localite ?></option>
                <?php endforeach ?>
                <input type="submit" value="Rechercher">
            </fieldset>
            </select>
        </form>

</div>



