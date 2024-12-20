<?php
/**
 * @package    availability_useragent
 * @copyright  2013-2024 Université de Lausanne
 * @author     Nicolas Dunand <Nicolas.Dunand@unil.ch>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 **/


$string['pluginname'] = 'User Agent';
$string['title'] = 'User Agent';
$string['description'] = 'Restrict access by browser User-Agent';
$string['require_condition'] = 'Matching browser type';

// TODO remove next two lines for production
$string['require_condition_debug_ok'] = 'Matching User-Agent. (Your User-Agent:{$a})';
$string['require_condition_debug_ko'] = 'Not matching User-Agent. (Your User-Agent:{$a})';

// Javascript strings.
$string['js:useragent'] = 'Require a specific browser';

// Errors.
$string['error_useragent'] = 'The expression is not a valid regex';

// Privacy provider.
$string['privacy:metadata'] = 'The restriction by activity useragent plugin does not store any personal data.';
