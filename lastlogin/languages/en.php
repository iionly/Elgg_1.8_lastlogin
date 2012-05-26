<?php
/**
 * Lastlogin plugin
 *
 * @package
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Fabrice Collette fabrice.collette@free.fr
 * @copyright Fabrice Collette
 *
 * Elgg 1.8 version by iionly
 * iionly@gmx.de
 */

$english = array(
'lastlogin:online' => '- online -',
'lastlogin:lastlogin' => 'Last login',
'lastlogin:today' => 'today',
'lastlogin:hour' => 'within last hour',
'lastlogin:joindate' => 'Join date',
'lastlogin:guid' => 'Member\'s GUID',

'lastlogin:settings:lastlogin_info' => 'The following settings allow you to configure to display on profile pages the time of the member\'s last login, the date the member joined the site and the member\'s GUID.<br> For time of last login and join date you can choose to not display it or to display it either only for admins or for everyone. The member\'s GUID can either be hidden from everyone or made visible only for admins.',
'lastlogin:settings:lastlogin_time' => 'Display time of last login? ',
'lastlogin:settings:registered_time' => 'Display join date? ',
'lastlogin:settings:guid' => 'Display member\'s GUID (visible only to admins)? ',
'lastlogin:settings:no' => 'No',
'lastlogin:settings:yes' => 'Yes',
'lastlogin:settings:admin' => 'For admins only',
'lastlogin:settings:all' => 'For everybody',

);

add_translation("en",$english);
