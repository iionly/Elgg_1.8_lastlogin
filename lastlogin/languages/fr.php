<?php
/**
 * Lastlogin plugin French language pack
 *
 * @package
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Fabrice Collette fabrice.collette@free.fr
 * @copyright Fabrice Collette
 *
 * Elgg 1.8 version by iionly
 * iionly@gmx.de
 */

$french = array(
'lastlogin:online' => '- en ligne -',
'lastlogin:lastlogin' => 'Dernière connexion',
'lastlogin:today' => 'aujourd\'hui',
'lastlogin:hour' => 'dans la dernière heure',
'lastlogin:never' => 'jamais',
'lastlogin:joindate' => 'Date d\'inscription',
'lastlogin:guid' => 'GUID de ce membre',

'lastlogin:settings:lastlogin_info' => 'Les paramètres suivants vous permettent de configurer les éléments à afficher sur les pages de profil: la date et l\'heure du dernier login de ce membre, la date à laquelle il a rejoint le site et le GUID du membre <br> Pour la date et l\'heure du dernier login ainsi que pour la date d\'inscription, vous pouvez choisir soit de ne pas les afficher, soit de les afficher uniquement aux admins soit à tout le monde. Similairement, le GUID du membre peut être soit caché pour tout le monde ou rendu visible seulement aux admins.',
'lastlogin:settings:lastlogin_time' => 'Afficher date et heure du dernier login? ',
'lastlogin:settings:registered_time' => 'Afficher la date d\'inscription? ',
'lastlogin:settings:guid' => 'Afficher le GUID des membres (visible uniquement par les admins)? ',
'lastlogin:settings:no' => 'Non',
'lastlogin:settings:yes' => 'Oui',
'lastlogin:settings:admin' => 'Pour les admins seulement',
'lastlogin:settings:all' => 'Pour tout le monde',

);

add_translation("fr",$french);
