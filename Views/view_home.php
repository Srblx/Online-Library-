<div class="form">
        <!-- form -->
        <form action="?controller=connexion&action=connexion" method="post">
            <h4>Entrez vos identifiants pour vous connectez : </h4>
            <label for="mail" class="label">Adresse mail <sup>*</sup>:</label>
            <input type="email" name="mail" id="mail" placeholder="*****@mail.fr" required>
            <label for="mdp" class="label">Mot de passe <sup>*</sup>:</label>
            <input type="password" name="mdp" id="mdp" placeholder="***************" required>
            <label for="connect"><input type="submit" value="Se connecter" id="send" name="submit"></label>
            <a href="?controller=connexion&action=sign_up" class="link" id="inscrip">Inscrivez-vous</a>
        </form>
    </div>