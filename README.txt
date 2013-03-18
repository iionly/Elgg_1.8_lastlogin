Lastlogin for Elgg 1.8
Latest Version: 1.8.4
Released: 2013-03-18
Contact: iionly@gmx.de
License: GNU General Public License version 2
Copyright: (c) iionly 2012 (for Elgg 1.8), (C) Fabrice Collette 2009


The Lastlogin plugin will display the time of last login (more precisely: time of last action), the join date and user's GUID on the members' profile pages. The last login time shown will be either "online", "within last hour", "today" or the date in YYYY/MM/DD format. The join date and user's GUID can also be helpful for admins in finding a user's data subfolder in Elgg's tree structure of the data directory.

The items to be displayed on profile pages can be configured: for time of last login and join date the visibility can be set either to "no", "admin only" or "everybody" (separately for both items). For users' GUIDs only the options "no" or "admin only" are available.



Installation:

The client side needs to have a Java runtime environment plugin installed in their browser for the Java applets to work.

1. Copy the lastlogin folder in the mod directory of your Elgg installation,
2. Enable the plugin in the admin section and configure the lastlogin plugin settings.



Changelog:

1.8.4 (by iionly):

- Check if user has logged in ever (unix timestamp of last_login == 0 ?). If never logged in show "never" instead of "1970/1/1". Thanks to Elggor for reporting this issue.

1.8.3 (by iionly):

- Danish translation added (thank to Herauf).

1.8.2 (by iionly):

- French translation updated (thank to emanwebdev).

1.8.1 (by iionly):

- French translation added (thank to emanwebdev),
- German translation added.

1.8.0 (by iionly):

- Initial release for Elgg 1.8.
