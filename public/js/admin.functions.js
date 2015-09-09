/**
 * Buscobon
 * fonctions javascript
 *
 * @author  alain DESSI <alain.dessi@laposte.net>
 * @link    www.alain-dessi.com
 *
 */


/**
 * Demande de confirmation de suppression
 * Utilise CreativeDream/jquery.modal - https://github.com/CreativeDream/jquery.modal
 *
 * @param  {string} url url de suppression
 */
function deleteitem(url)
{
    modal({
      type  : 'confirm',
      title : 'Confirmation de suppression',
      text  : 'voulez vous vraiment supprimer cet élement ?',
      callback: function(result){

          if(!result) {
             // document.location.href = url;
          }
      }
    });
}
