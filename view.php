<?php
 
require('../../config.php');
require_once('../../lib/moodlelib.php');
 
require_login();
 
//get our config
$def_config = get_config('block_superiframe');
 
$usercontext = context_user::instance($USER->id);
$PAGE->set_course($COURSE);
$PAGE->set_url('/blocks/superiframe/view.php');
$PAGE->set_heading($SITE->fullname);
$PAGE->set_pagelayout($def_config->page_layout);
$PAGE->set_title(get_string('pluginname', 'block_superiframe'));
$PAGE->navbar->add(get_string('pluginname', 'block_superiframe'));
 
 
// start output to browser
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'block_superiframe'),5);
 
// Some content goes here
echo $OUTPUT->user_picture($USER);
echo '<br>' . fullname($USER);
echo '<br><br>SuperiFrame in ' . $def_config->page_layout . ' layout !<br><iframe src="' . $def_config->url . '" height="' . $def_config->iframe_height . '" width="' . $def_config->iframe_width . '" style="border:0"></iframe>';
 
//send footer out to browser
echo $OUTPUT->footer();
return;
