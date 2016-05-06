# Buscobon - My little PHP frameWork #
Buscobon, est un petit frameWork MVC que j'utilise souvent comme point de démarrage dans quelques projets personnel. Le developement à debuter l'été 2015, après avoir découvert Laravel. Beaucoup de noms de ses fonctions ainsi que l'organisation de son contenu est largement inspiré de celui-ci.

Il utilise
 - Bootstrap V3
 - PhpMailer
 - Blade
 - Composer
 - Grunt
 - Adweb

## Sommaire ##
 1. Installation
 2. Configuration

## Installation ##
Télécharcher l'archives correspondant à la dernière version, ou utiliser la commande
```bash
$ composer create-project --stability dev  adweb/buscobon [DIRECTORY]
```

Pour l'utilisation de grunt et de ses plugins
```
$ npm update
```

## Configuration ##
le fichier principal de configuration de l'application se trouve dans le répertoire ***config***

Dupliquer le fichier ***config\user.config.sample.php*** en ***user.config.php***

## Avant de passer en Production ##
Executer
```
$ grunt build
```

## information ##
Le système d'authentification pour l'administration est donné à titre d'exemple.
