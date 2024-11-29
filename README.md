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
5. Enter the user agent regex you want to restrict access to, without delimiters, e.g. `^.*(Chrome|Firefox).*$`.
6. Save your changes.

### Example usage to check for minimal navigator version

**Use case:** check and dispay a message to the user on the course page of the user is not at least on Chrome 120, Firefox 130, or Safari 18.

1. Create a Label containing the test "Your browser version is unsupported." (or equivalent message).
2. Add a "User agent" access restriction rule with the following RegExp: `^.*(Firefox.*13\d|Chrome.*12\d|18\..*Safari).*$`
3. Chose the `must not` option instead of the `must` option to invert the access condition. 
4. Click the `eye` icon next to the access rule to make it that the Label is not displayed when the condition is met.

The effect is that the label containing the warning is only displayed if the client browser versoin does not match the criterion.

## License

This plugin is licensed under the [GNU GPL v3 or later](http://www.gnu.org/copyleft/gpl.html).

## Author

This plugin was developed by Nicolas Dunand <nicolas.dunand@unil.ch> based on the plugin availability_ipaddress by Luuk Verhoeven <luuk@ldesignmedia.nl>.