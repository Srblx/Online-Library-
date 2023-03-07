Dans cette version il faut :

1. Utiliser l’architecture MVC

2. Ajouter une table pour les Commande (voir document MPD)

3. Ajouter les relations entre la table Commande et les tables Client et Fournisseur

4. Ajouter l’onglet Commandes (comme livres et fournisseurs) pour faire les actions suivantes :
   a. Lister les commandes
   b. Insérer une commande
   c. Lister les commandes en fonction de :
   i. Nom du client ii.
   Nom du fournisseur iii.

Date L’affiche des commandes doivent afficher les champs suivants :
Numéro_Commande
ISBN_Livre
Titre_Livre
Auteur_Livre
Raison_Sociale_Fournisseur
Date_Achat
Prix_Achat
Nombre_Exemplaires

Ajouter, dans la table Users, un champ de rôle qui prend 2 valeurs (Admin et user). Si l’utilisateur est un Admin, il doit avoir accès à tout. Si l’utilisateur est un user, il a accès à la consultation et non à l’ajout, la modification et la suppression (livre et fournisseur).
