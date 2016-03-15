<?php
/**
 * Configuration du menu de l'administration
 * Utilise la Class Menu pour l'affichage du Menu
 *
 * Pour ajouter un élément de menu
 * exemple  'MenuName' => [ 'label', 'icon', 'route', 'min_right', array() or Null ]
 *
 * pour ajouter un sparateur
 * ['separator',  '', '', '10', null],
 *
 * @category    Configuration file
 * @package     Buscobon
 * @author      DESSI Alain <contact@alain-dessi.com>
 * @copyright   2016 Dessi Alain
 * @link        http://www.alain-dessi.com
 */

return array(

    'menuleft' => [
                    ['Tableau de Bord', 'fa fa-dashboard', 'admin.homepage', '10',null],
                    ['Gestion du site', 'fa fa-database', '', '10',
                      [
                        ['Menu 1', 'fa fa-cog', 'admin.homepage', '10', null],
                        ['Menu 2', 'fa fa-cog', 'admin.homepage', '10', null],
                        ['separator',  '', '', '10', null],
                        ['Menu 3', 'fa fa-cog', 'admin.homepage', '10', null]
                      ]
                    ],
                    ['Configuration', 'fa fa-cogs', '', '900',
                      [
                        ['Utilisateurs', 'fa fa-users', 'admin.users', '10', null]
                      ]
                    ]
                  ]
);
