# Buscobon - My little PHP frameWork #
Buscobon, est un petit frameWork que j'utilise dans mes projets personnel. Le developement à debuter l'été 2015, après avoir découvert Laravel.
Beaucoup de noms de ses fonctions ainsi que l'organisation de son contenu est largement inspiré de celui-ci.

Il utilise
 - Bootstrap V3
 - PhpMailer
 - Blade
 - Composer
 - Grunt

## Sommaire ##
 1. Installation
 2. Configuration

## Installation ##
Télécharcher l'archives correspondant à la dernière version

Executer
```
$ composer update
```
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