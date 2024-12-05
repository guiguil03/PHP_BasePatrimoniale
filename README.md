# Projet Vagrant pour une VM Debian 12 avec PHP, MariaDB, PostgreSQL et OCI8

Ce projet met en place une machine virtuelle (VM) avec **Debian 12** en utilisant **Vagrant**. Il fournit un environnement **PHP** configurable (sélection de la version via un fichier de configuration), les bases **MariaDB** et/ou **PostgreSQL** et un module **OCI8** (module pour les bases Oracle) optionnel pour PHP.

## Prérequis

- [Vagrant](https://www.vagrantup.com/downloads) (dernière latest version recommandée)
- [VirtualBox](https://www.virtualbox.org/wiki/Downloads) 

## Utilisation

1. Télécharger l'archive 'release'

2. Options de configuration:  
   Editer le fichier ```vagrant/config.rb```

- Paramètres de VM:  
**MEMORY_SIZE**: Taille mémoire en Ko.  
**CPU_COUNT**: Nombre de coeurs  

- Heure système:  
**TIMEZONE**: Timezone (ex: "Europe/Paris")  

- Paramètres de port:  
**HTTP_PORT_GUEST**: Port de transfer côté VM (si _nil_, transfer vers défaut **8080**)  
**HTTP_PORT_HOST**: Port de transfer côté hôte (si _nil_, transfer vers défaut **8080**)  

- Paramètres PHP:  
**PHP_VERSION**: Spécifie la version de PHP à installer. Valeurs supportées : _5.6_,_7.4_, _8.0_, _8.1_, etc.  
**PHP_MODULES**: Modules sans préfixe "```php-```" séparés par un espace (ex: "_ldap session_")  
**PHP_WITH_OCI8**: Installation du module OCI8 (_true_ ou _false_)  

- Paramètres MariaDB:  
**WITH_MARIADB**: Installe MariaDB (_true_ ou _false_)  
**MARIADB_PORT_HOST**: Port de transfer côté VM (si _nil_, transfer vers défaut **3306**)  
**MARIADB_DB_DATABASE**: Nom de la base de données  
**MARIADB_DB_USERNAME**: Utilisateur  
**MARIADB_DB_PASSWORD**: Mot de passe  

- Paramètres PostgreSQL:  
**WITH_POSTGRESQL**: Installe PostgreSQL (_true_ ou _false_)  
**POSTGRESQL_PORT_HOST**: Port de transfer côté VM (si _nil_, transfer vers défaut **5432**)  
**POSTGRESQL_DB_DATABASE**: Nom de la base de données  
**POSTGRESQL_DB_USERNAME**: Utilisateur  
**POSTGRESQL_DB_PASSWORD**: Mot de passe   

- Packages supplémentaires:  
**EXTRAS_PKG**: Packages complémentaires à installer séparés par un espace. (ex: "_vim htop_")  
