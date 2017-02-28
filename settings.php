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
 * superiframe block caps.
 *
 * @package    block_superiframe
 * @copyright  Daniel Neis <danielneis@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$defaulturl = 'https://quizlet.com/132695231/scatter/embed';
$settings->add(new admin_setting_configtext('block_superiframe/url',
                                         get_string('config_url', 'block_superiframe'),
                                         get_string('config_url_desc', 'block_superiframe'),
										 $defaulturl,
										 PARAM_RAW));

$settings->add(new admin_setting_configtext('block_superiframe/iframe_height',
                                         get_string('config_iframe_height', 'block_superiframe'),
                                         get_string('config_iframe_height_desc', 'block_superiframe'),
										 400,
										 PARAM_INT));

$settings->add(new admin_setting_configtext('block_superiframe/iframe_width',
                                         get_string('config_iframe_width', 'block_superiframe'),
                                         get_string('config_iframe_width_desc', 'block_superiframe'),
										 600,
										 PARAM_INT));

$options = array('course' => get_string('course'), 'popup' => get_string('popup'));
$settings->add(new admin_setting_configselect('block_superiframe/page_layout',
                                         get_string('config_page_layout', 'block_superiframe'),
                                         get_string('config_page_layout_desc', 'block_superiframe'),
										 'course',
										 $options));
