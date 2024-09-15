<?php
// Inkluder Moodle's config-fil for at have adgang til Moodle's funktionaliteter.
require_once(__DIR__ . '/../../../config.php');

// Sikre at brugeren er logget ind og har rettigheder til at se denne side.
require_login();
$PAGE->set_cacheable(false);
// Opsæt URL, titel og heading for siden.
$PAGE->set_url(new moodle_url('/local/message/makekahoot/view.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title("Titel på page");
$PAGE->set_heading("Her er vores header");

$PAGE->set_pagelayout('standard');  // Du kan ændre layout efter behov.

// Render headeren.
echo $OUTPUT->header();

// Tilføj din egen side indhold her.
echo $OUTPUT->heading("Carl er sej");
echo html_writer::div("Sådan laver du en div!");

// Render footeren.
echo $OUTPUT->footer();
