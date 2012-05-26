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

function lastlogin_init() {
    elgg_extend_view('css/elgg','lastlogin/css');
    elgg_extend_view('icon/user/default','lastlogin/profile_extend',600);
}

elgg_register_event_handler('init','system','lastlogin_init');
