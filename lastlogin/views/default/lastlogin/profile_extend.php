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

if ((elgg_get_context() == "profile") && ($vars['size'] == "large")) {

    $contents = "<div class=\"lastlogin\";\">";
    $add_it = false;

    if ((elgg_get_plugin_setting('lastlogin_visibility', 'lastlogin') == "all") || (elgg_get_plugin_setting('lastlogin_visibility', 'lastlogin') == "admin") && (elgg_is_admin_logged_in())) {
        $last_action = $vars['entity']->last_action;
        $contents .= elgg_echo('lastlogin:lastlogin').": ";
        if ((time() - $last_action) < 600) {

            $contents .= "<lastlogin_online>".elgg_echo('lastlogin:online')."</lastlogin_online><br>";

        } else {

            $lastlogin = intval((time() - $last_action)/(3600));

            if ($lastlogin > 24) {
                $contents .= date("Y/n/j", $last_action)."<br>";
            } else {
                if ($lastlogin > 1) {
                    $contents .= elgg_echo('lastlogin:today')."<br>";
                } else {
                    $contents .= elgg_echo('lastlogin:hour')."<br>";
                }
            }
        }
        $add_it = true;
    }

    if ((elgg_get_plugin_setting('registered_visibility', 'lastlogin') == "all") || (elgg_get_plugin_setting('registered_visibility', 'lastlogin') == "admin") && (elgg_is_admin_logged_in())) {
        $time_created = $vars['entity']->time_created;
        $contents .=  elgg_echo('lastlogin:joindate').": ".date("Y/n/j", $time_created)."<br>";
        $add_it = true;
    }

    if ((elgg_get_plugin_setting('guid_visibility', 'lastlogin') == "yes") && (elgg_is_admin_logged_in())) {
        $user_guid = $vars['entity']->guid;
        $contents .=  elgg_echo('lastlogin:guid').": ".$user_guid."<br>";
        $add_it = true;
    }

    $contents .= "</div>";
    if($add_it) {
        echo $contents;
    }
}
