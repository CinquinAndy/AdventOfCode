<a href="https://www.andy-cinquin.fr/">
    <img src="https://www.andy-cinquin.fr/images/logoAnimeeNoLoop_End.png" alt="Andy logo" title="Cinquin Andy" align="center" height="300" />
</a>

Cinquin Andy - Projet Advent Of Code
======================

Une interface pour s'entrainer en Algo sur Advent of code ? 

## Table of content

- [Installation](#Installation)
- [Liens Pratiques](#liens-pratiques)
- [Mes projets perso](#mes-projets-perso)


## Installation
Pour commencer télécharger le projet,
<br> Ensuite, prenez le dossier du projet, puis glissez le dans votre répertoire Xampp / Wamp, 
<br> Xampp : C:\xampp\htdocs 
<br> Wamp : C:\wamp64\www 
<br> Mamp : C:\MAMP\htdocs 
<br>
<br> Accédez maintenant à votre interface de base de données, 
<br> normalement : http://localhost:8888/phpMyAdmin

<img src="https://www.andy-cinquin.fr/images/projetAdventOfCode_phpAdmin.png" align="center" height="300" />

<br> Creez votre utilsateur
<br>
<img src="https://www.andy-cinquin.fr/images/projetAdventOfCode_phpAdmin2.png" align="center" height="100" />
<br>nommez le : 'adventofcode', avec le mot de passe que vous souhaitez, <br>
n'oubliez pas de cocher les cases de créations de bases de données en même temps, et de privilèges.
<br> 'Créer une base portant son nom et donner à cet utilisateur tous les privilèges sur cette base. '
<br> et 'Accorder tous les privilèges à un nom passe-partout (utilisateur\_%). '
<br> Ainsi que les privilèges globaux bien cochés également !
<br>
<img src="https://www.andy-cinquin.fr/images/projetAdventOfCode_phpAdmin3.png" align="center" height="500" />
<br> Recuperez ensuite le fichier 'adventofcode.sql', copier le contenu et copier le dans la partie 'SQL'
<br> de phpMyAdmin... puis exécutez.
<br><img src="https://www.andy-cinquin.fr/images/projetAdventOfCode_phpAdmin4.png" align="center" height="300" />
<br> 
<br>
<br>Maintenant il va falloir mettre en place l'interpreteur PHP et relier notre base de donnée à PHPStorm
<br> Pour ce faire, 
<br><img src="https://www.andy-cinquin.fr/images/projetAdventOfCode_settings.png" align="center" height="500" />
<br> Dans PHPStorm : file -> settings -> languages & framework -> php -> cli interpreter
<br> Vous pouvez configurer cela, ici, voici les liens généraux des fichiers php.exe :
<br> Xampp : C:\xampp\php\php.exe
<br> Wamp : C:\wamp\bin\php\php7.1.33\php.exe
<br> Mamp : C:\MAMP\bin\php\php7.1.33\php.exe
<br>
<br> Ensuite, il nous reste plus qu'a configuré notre base de donnée sur PHP Storm, 
<br> 
<br> <img src="https://www.andy-cinquin.fr/images/projetAdventOfCode_database.png" align="center" height="500" />
<br>
<br> (JE SUIS UN ARTISTE ON CRITIQUE PAS, elle est très belle ma flèche rouge ^^ !)
<br> 
<br> cliquez sur database, puis selectionnez dans datasource, 'MySQL'
<br> <img src="https://www.andy-cinquin.fr/images/projetAdventOfCode_datebase2.png" align="center" height="500" />
<br> Vous pouvez lié votre base de donnée ici, 
<br> toujours avec le même mot de passe initial, et nom d'utilisateur, 
<br> <img src="https://www.andy-cinquin.fr/images/projetAdventOfCode_database3.png" align="center" height="500" />
<br> Téléchargez le driver proposé. 
<br>
<br> 
<br> Enfin, dernier point important ! On va creer le fichier 'config.php', à la racine du projet
<br> <img src="https://www.andy-cinquin.fr/images/projetAdventOfCode_configPhp.png" align="center" height="500" />
<br> mettez bien votre mot de passe créer pour votre base de donnée, le bon nom d'utilisateur (adventofcode) normalement... etc,
<br> Attention la casse compte ! ('a' est différent de 'A') !
<br>
<br> Appliquez, et normalement tout est bon ! 
<br> Amusez vous bien ! 
<br>
<br> Edit : 
<br> Vous devez également configurer le déploiement dans PHPStorm
<br> Pour ce faire allez dans file->settings->build, excecution, deployement -> deployement
<br> Puis ajouter votre liens localhost vers la racine du projet 
<br> Comme ceci : 
<br> <img src="https://www.andy-cinquin.fr/images/projetAdventOfCode_configDeployement.png" align="center" height="500" />
<br>
<br> ps : si une erreur se manifeste après avoir fait toutes les configurations, c'est 'normal', c'est qu'il n'y a aucune valeur
<br> dans les variables de sessions pour le moment, ajouté dans ' l'input puzzle ' votre chaine fournis par advent of code !
<br> et l'erreur devrais disparaitre !
<br>
<br> Amusez vous bien !

## Liens pratiques
https://adventofcode.com/2019/events
<br>
https://www.php.net/manual/fr/
<br>
https://getbootstrap.com/docs/4.1/getting-started/introduction/


## Mes projets perso
https://www.andy-cinquin.fr/
<br>
https://julie-sommaro.com/
<br>
https://www.cinquin-maeva.com/
<br>
https://isabelle-cinquin.fr/
