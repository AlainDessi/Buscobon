<?php

// exemple  'MenuName' => [ 'label', 'icon', 'route', 'min_right', array() or Null ]

return array(

    'menuleft' => [
                    ['Homepage', 'fa fa-home', 'admin.homepage', '10',null],
                    ['Gestion du site', 'fa fa-database', '', '10',
                      [
                        ['Menu 1', 'fa-home', 'admin.homepage', '10', null],
                        ['Menu 2', 'fa-home', 'admin.homepage', '10', null],
                        ['Menu 3', 'fa-home', 'admin.homepage', '10', null]
                      ]
                    ],
                    ['Configuration', 'fa fa-cogs', '', '900',
                      [
                        ['Utilisateurs', 'fa fa-users', 'admin.users', '10', null]
                      ]
                    ]
                  ]
);