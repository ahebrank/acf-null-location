<?php
/**
 * ACF Null Location
 *
 *
 * @since             0.1.0
 * @package           newcity
 *
 * @wordpress-plugin
 * Plugin Name:       ACF Null Location
 * Description:       A location rule for an ACF field group to ensure it's never shown. For use with groups that are used as clones.
 * Version:           0.1
 * Author:            NewCity  <geeks@insidenewcity.com>
 * Author URI:        http://insidenewcity.com
 * License:           NONE
 */

add_filter('acf/location/rule_types', 'acf_null_location_rule');
function acf_null_location_rule( $choices ) {
    $choices['Custom']['null'] = 'Global';
    return $choices;
}

add_filter('acf/location/rule_operators/null', 'acf_null_location_rules_operators');
function acf_null_location_rules_operators( $choices ) {
    return [array_shift($choices)];
}


add_filter('acf/location/rule_values/null', 'acf_null_location_rules_values');
function acf_null_location_rules_values( $choices ) {
	return ['null' => 'Never show'];
}
