Préparation évaluation: Projet ReportingTaxi
=============================== 

# Problématique:

Un chauffeur de taxi fait des courses pour ses passagers d'une adresse de départ à une adresse d'arrivée.

Le ou les passagers participants à une course doivent pouvoir être identifié (nom, prénom)

# Besoin:

- Pouvoir saisir les Chauffeurs ( nom, prenom ), les Passagers ( nom, prenom ), les Adresses ( rue, ville) et les Courses ( distance ) depuis une adresse admin/

- Afficher un reporting qui permet de voir toutes les courses qu'a effectué un chauffeur avec l'adresse de départ, l'adresse d'arrivée et la distance

## Modélisation de la base de données
- MCD
- MLD
- MPD   
        
## Maquetter l'application
- Interface de reporting
    - Zone de filtrage du Chauffeur de taxi
    - Tableau de résultat
        - Entête du tableau: Chauffeur, Id course, Lieu de départ, Lieu d'arrivée, Distance
        - Les données du tableau

## Développement avec framework
- Créer projet
- Faire le modèle
    - Créer entités
    - Renommer les tables
    - Définir les relations
- Générer la base de données
- Générer l'espace admin
- Constituer un jeu de données de test ( soit en utilisant l'interface admin soit en faisant des requêtes SQL )
- Faire l'interface de reporting


A Symfony project created on January 31, 2018, 9:40 am.


A Symfony project created on January 31, 2018, 12:12 pm.
