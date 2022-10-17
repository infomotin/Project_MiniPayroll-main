<?php
//get all contorller from folder
foreach (glob("Controllers/*.php") as $filename) {
    require_once $filename;
}

foreach (glob("Models/*.php") as $filename) {
    require_once $filename;
}
$template = new ControllersTemplate();
$template->crtTemplate();
