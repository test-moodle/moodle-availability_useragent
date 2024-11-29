# Availability UserAgent Plugin

This plugin provides a way to restrict access to Moodle activities and resources based on the user's browser user agent.

## Installation

1. Download the plugin.
2. Extract the contents of the plugin to the `availability/condition/useragent` directory in your Moodle installation.
3. Visit the Moodle admin page to complete the installation.

## Usage

1. Navigate to the course where you want to add the restriction.
2. Edit the settings of the activity or resource you want to restrict.
3. In the "Restrict access" section, click "Add restriction...".
4. Select "User agent".
5. Enter the user agent regex you want to restrict access to.
6. Save your changes.

## License

This plugin is licensed under the [GNU GPL v3 or later](http://www.gnu.org/copyleft/gpl.html).

## Author

This plugin was developed by Nicolas Dunand <nicolas.dunand@unil.ch> based on the plugin availability_ipaddress by Luuk Verhoeven <luuk@ldesignmedia.nl>.