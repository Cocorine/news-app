
# GUIDE D'INSTALLATION

Dans ce guide je vous guiderai a vous approprier proprement ce projet.

Voici le plan :

-   Téléchargement du répositorie

-   Installation de composer
    
-   Local configuration
    
-   Internet configuration

## Téléchargement du répositorie

La premiere des choses que nous allons faire sera de télécharger le projet du répositorie.
De ce fait il y a plusieurs moyens afin de le réaliser à savoir : 


### OPTION 1 : git clone
La premiere option est de cloner le répositorie. Tout simplement très facile, pas besoin de se déranger.
```
cd <worspace_directory>

git init

git clone <repository_https_url>
```
### OPTION 2 : git remote
La deuxième option est d'établir une connexion avec le repository distant afin d'accéder au contenu de celui pour enfin télécharger les données du répositorie et tout ceci dans le dossier de travail de votre choix.

###### NB : Cette methode est souvent utilisé par les développeurs qui ont des expériences dans le domaine

Pour le faire on procède de deux manieres un peu similaire

##### ASTUCE 1 : git fetch and merge
```
cd <worspace_directory>

mkdir <project_name>

cd <project_name>

git init

git remote add origin <repository_https_url>

git fetch origin <branch_name>

git merge origin/<branch_name> 
```

##### ASTUCE 1 : git fetch and merge
```
cd <worspace_directory>

mkdir <project_name>

cd <project_name>

git init

git remote add origin <repository_https_url>

git fetch origin <branch_name>

git merge origin/<branch_name> 
```

##### ASTUCE 2 : git fetch and merge
```
cd <worspace_directory>

mkdir <project_name>

cd <project_name>

git init

git remote add origin <repository_https_url>

git pull origin <branch_name>
```


### OPTION 3 : Download the zip file on the web interface
La derniere option et l'une des plus facile est de d'accéder à la page web du répository and téléchager le fichier zip de tout le projet.

```
Go into zip file <directory>

unzip the zip file

you will see a directory name exactly like your zip file
```

###### NB NB: Feel free to choose whatever of those above options with which you will be conftable to done it 



## Installation de composer

A cette etape nous allons installer les dépendences de composer afin de pourvoir compiler notre application. De ce fait :

-   il faudra ouvrir votre invite de commande (Terminale) 

-   Parcourir les répertoires afin d'accéder au dossier racine de notre projet
    
-   Pour être sur que vous êtes bien dans le dossier du projet vérifier si vous allez trouver les fichiers composer.json, .env.example ainsi que les dossiers telsque app, core, resources, routes, etc.

-   Maintenant que nous avons bien vérifier et êtes réellement dans le dossier racine du projet vous allez taper la commande suivant afin d'installer les dépendences dont notre projet a besoin : 
```
>   composer install
```

###### Si vous avez des erreurs de versions de php alors supprimer le fichier composer.lock. Faites attention ne supprimer le fichier composer.json, mais plutot le fichier composer.lock. Puis relancer la meme commande.

Assurer vous d'avoir une connexion d'accès à internet

Une fois l'installation finir c'est bon on pourra commencer avec le configuration du projet afin de pouvoir la confirmer sans erreurs. Nous verrons ceci dans le chapitre prochain

## Local configuration

Dans ce chapitre nous allons configurer certain fichier clé afin de pouvoir compiler notre projet.

Nous allons commencer avec le fichier .env : 

```
cp .env.example .env
```

Une fois la commande exécuter nous allons configurer le fichier .env. Le fichier .env contient toutes les informations clé d'execution de notre projet