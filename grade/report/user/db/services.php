<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * User grade report external functions and service definitions.
 *
 * @package    gradereport_user
 * @copyright  2015 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$functions = [
    'gradereport_user_get_grades_table' => [
        'classname' => 'gradereport_user\\external\\user',
        'methodname' => 'get_grades_table',
        'description' => 'Get the user/s report grades table for a course',
        'type' => 'read',
        'capabilities' => 'gradereport/user:view',
        'services' => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'gradereport_user_view_grade_report' => [
        'classname' => 'gradereport_user\\external\\user',
        'methodname' => 'view_grade_report',
        'description' => 'Trigger the report view event',
        'type' => 'write',
        'capabilities' => 'gradereport/user:view',
        'services' => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'gradereport_user_get_grade_items' => [
        'classname' => 'gradereport_user\\external\\user',
        'methodname' => 'get_grade_items',
        'description' => 'Returns the complete list of grade items for users in a course',
        'type' => 'read',
        'capabilities' => 'gradereport/user:view',
        'services' => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
];
