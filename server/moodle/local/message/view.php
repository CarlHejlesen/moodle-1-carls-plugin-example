<?php
// Inkluder Moodle's config-fil for at have adgang til Moodle's funktionaliteter.
require_once(__DIR__ . '/../../config.php');

// Sikre at brugeren er logget ind og har rettigheder til at se denne side.
require_login();

// Opsæt URL, titel og heading for siden.
$PAGE->set_url(new moodle_url('/local/message/view.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('pagetitle', 'local_message'));
$PAGE->set_heading(get_string('pageheading', 'local_message'));
$PAGE->set_pagelayout('standard');  // Du kan ændre layout efter behov.

// Render headeren.
echo $OUTPUT->header();

// Tilføj din egen side indhold her.
echo $OUTPUT->heading(get_string('welcomeheading', 'local_message'));
echo html_writer::div(get_string('welcomemessage', 'local_message'));

// Render footeren.
echo $OUTPUT->footer();
