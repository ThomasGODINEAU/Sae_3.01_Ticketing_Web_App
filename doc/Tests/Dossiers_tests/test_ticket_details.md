# Dossier de tests

![logo_uvsq](../../annexes/logo_uvsq.png)

| Web App Ticketing                 | Version : 0             |
|--------------------------------------------|-------------------------|
| Document : Dossier de tests                | Date : 02/12/2023       |
| Responsables de la rédaction : Jules CHIRON, Matis RODIER |          |

## 1. Introduction

Ce dossier contient les tests pour les différentes pages du site.
Nous testerons toutes les pages possiblement à afficher.

## 2. Description de la procédure de test

Pour la page ticket_details nous vérifions que pour chaque lien en fonction des utilisateurs, ils redirigent vers la bonne page.

## 3. Description des informations à enregistrer pour les tests

### 1. Campagne de test

| Produit testé : ticket_details.php                                 |
|-------------------------------------------------------------------------|
| Configuration logicielle : Apache2, Google Chrome, Firefox, Brave                   |
| Configuration matérielle : Ubuntu 23.10, Windows 11                     |
| Date de début : 02/12/2023                                              |
| Date de finalisation : 02/12/2023                                       |
| Tests à appliquer : ticket_details_prendre_en_charge, ticket_details_clore_ticket, access|
| Responsable de la campagne de test : Matis RODIER     |

### 2. Tests

| Identification du test : 0               |
|------------------------------------------|
| Version : 0                              |
| Description du test : ticket_details_prendre_en_charge |
| Ressources requises : Apache2, Google Chrome, Firefox, Brave   |
| Responsable : Matis  RODIER             |

#### Cas de test

| Classe | Donnée 1 |   Résultat attendu    |
|:------:|:--------:|:----------------:|
|   P1   |         ‘Prendre en charge’           |     ticket.php |

| Identification du test : 1               |
|------------------------------------------|
| Version : 1                              |
| Description du test : ticket_details_clore_ticket |
| Ressources requises : Apache2, Google Chrome, Firefox, Brave   |
| Responsable : Matis  RODIER             |

#### Cas de test

| Classe | Donnée 1 |   Résultat attendu    |
|:------:|:--------:|:----------------:|
|   P1   |         'Clore'           |     ticket.php   |

| Identification du test : 2               |
|------------------------------------------|
| Version : 2                              |
| Description du test : access |
| Ressources requises : Apache2, Google Chrome, Firefox, Brave   |
| Responsable : Matis  RODIER             |

#### Cas de test

La donnée 1 correspond au fait qu'un type d'utilisateur accède à la page ticket_details.php. Si cet utilisateur y accède, alors il est renvoyé sur la page de la colonne "Résultat attendu".

| Classe | Donnée 1 |   Résultat attendu    |
|:------:|:--------:|:----------------:|
|   P1   |        visiteur      |   index.php  |
|   P2   |        admin system      |   index.php  |
|   P3   |        user      |   index.php  |
|   P4   |        admin web      |   index.php  |

### 3. Résultats de tests

| Référence du test appliqué : 0             |
|--------------------------------------------|
| Responsable : Matis RODIER                 |
| Date de l'application du test : 10/12/2023 |
| Résultat de test : OK                      |
| Occurrence des résultats : systématique    |

| Classe | Donnée 1 |   Résultat attendu    |Résultat observé | Résultat test |
|:------:|:--------:|:----------------:|:----------------:|:----------------:|
|   P1   |         ‘Prendre en charge’           |     ticket.php | ticket.php |OK|

---

| Référence du test appliqué : 1             |
|--------------------------------------------|
| Responsable : Matis RODIER                 |
| Date de l'application du test : 10/12/2023 |
| Résultat de test : OK                      |
| Occurrence des résultats : systématique    |

| Classe | Donnée 1 |   Résultat attendu    |Résultat observé | Résultat test |
|:------:|:--------:|:----------------:|:----------------:|:----------------:|
|   P1   |         'Clore'           |     ticket.php   |ticket.php   |OK|

---

| Référence du test appliqué : 2             |
|--------------------------------------------|
| Responsable : Matis RODIER                 |
| Date de l'application du test : 10/12/2023 |
| Résultat de test : OK                      |
| Occurrence des résultats : systématique    |

| Classe | Donnée 1 |   Résultat attendu    |Résultat observé | Résultat test |
|:------:|:--------:|:----------------:|:--------:|:----------------:|
|   P1   |        visiteur      |   index.php  |index.php  |OK|
|   P2   |        admin system      |   index.php  | index.php  |OK|
|   P3   |        user      |   index.php  | index.php  |OK|
|   P4   |        admin web      |   index.php  | index.php  |OK|

### 4. Conclusion

Tous les tests que nous avons effectués pour la page des détails des tickets sont OK.
