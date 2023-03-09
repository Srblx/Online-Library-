<form action="?controller=connexion&action=insert_user" method="post">
        <fieldset class="fieldsetBg">
            <legend>Inscription</legend>
            <label for="firstName" class="label">Nom <sup>*</sup>: </label>
            <input type="text" name="firstName" id="firstName" minlength="2" maxlength="30" required>
            <label for="lastName" class="label">Prénom <sup>*</sup>: </label>
            <input type="text" name="lastName" id="lastName" minlength="2" maxlength="30" required>
            <label for="mail" class="label">E-mail <sup>*</sup> : </label>
            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="mail" id="mail" required>
            <label for="mdp" class="label">Mot de passe <sup>*</sup> : </label>
            <input type="password" name="mdp" id="mdp" minlength="8" required>
            <label for="mdp2" class="label">Confirmer <sup>*</sup> : </label>
            <input type="password" name="mdp2" id="mdp2" required>
            <input type="submit" name="submit" value="Submit" id="send">
            <a href="?conbtroller=home&action=home" class="link">Retour à l'accueil</a>
            <label for="reset"></label><input type="reset" value="Reset" id="reset">
        </fieldset>
    </form>