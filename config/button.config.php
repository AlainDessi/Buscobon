<?php
/**
 * Configuration des boutons de l'applications
 * Utilise la Class Button pour l'affichage des boutons
 *
 * Pour ajouter un élément de menu
 * exemple  'ButtonName' => [ 'FontAwesomeIcon', 'BootStrapButtonType' ]
 *
 * @category    Configuration file
 * @package     Buscobon
 * @author      DESSI Alain <contact@alain-dessi.com>
 * @copyright   2016 Dessi Alain
 * @link        http://www.alain-dessi.com
 */

return array(

  'icons' =>  [
                'save'        =>  ['fa fa-save', 'success'],
                'cancel'      =>  ['fa fa-undo', 'danger'],
                'list'        =>  ['fa fa-th-list', 'info'],
                'add'         =>  ['fa fa-plus', 'primary'],
                'delete'      =>  ['fa fa-trash', 'danger'],
                'edit'        =>  ['fa fa-pencil-square-o', 'success']
              ],


);