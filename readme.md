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

Brief 5
table commande
1 numero_commande Primaire int(15)
2 id_livre Index int(11)
3 id_fournisseur Index int(11)
4 date_achat date u
5 prix_achat decimal(7,2)
6 nb_exemplaire

tabke user
id Primaire int(11)
2 nom Index varchar(80)
3 prenom Index varchar(80)
4 mail Index varchar(80)
5 mdp varchar(80)
6 est_administrateur

table livre
1 id Primaire int(11)
2 isbn int(15)
3 titre Index varchar(80)
4 theme varchar(80)
5 nombreDePage int(150)
6 format varchar(80)
7 nomAuteur varchar(80)
8 prenomAuteur varchar(80)
9 editeur varchar(80)
10 anneeEdition
11 prix decimal(6,2)
12 langue

table fournisseur
1 id Primaire int(11)
2 code_fournisseur Index int(11)
3 raison_social Index varchar(50)
4 rue_fournisseur varchar(50)
5 code_postal Index int(11)
6 localite Index varchar(50)
7 pays varchar(50)
8 tel_fournisseur int(11)
9 url_fournisseur varchar(100)
10 mail_fournisseur varchar(100)
11 fax_fournisseur

dans la table fournisseur id et lié avec id_fournisseur de la table commande
dans la table livre id et lié avec id_livre de la table livre

faire le MCD en intégrant les possibilités suivantes :

Un éditeur de livre peut éditer plusieurs livres et un livre peut être éditer par plusieurs éditeurs
Un auteur de livre peut écrire plusieurs livres et un livre peut être écrit par plusieurs auteurs Réaliser le nouveau MCD

