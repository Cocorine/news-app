
# GUIDE DE DÉPLOIEMENT

- Base de donnée

- Importation des données

- Créer un lien symbolique d'accès au fichier de stockage depuis le dossier public de notre application

## EXIGENCES 

-   Creer un compte utilisateur admin propre à ce projet

-   Rappelle cet utilisateurs doit être différents de l'utilisateur d'accès au cpanel


Se rappeler de définir des restrictions d'accès au fichiers sensibles du projet 

```
chmod 644 -R 
chmod 755 -R 
chmod USER:644
```

Vérifier si ces restrictions n'impacte pas sur le bien fonction du projet : 

- Files Storages

- Accès au fichiers nécessaire par l'application elle meme
    
- Cacher la visibilité du fichier .env
