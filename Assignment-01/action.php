<?php

require_once 'vendor/autoload.php';

use App\classes\Assignment;

if(isset($_GET['page'])) {
    if($_GET['page'] == 'division') {
        $assignment = new Assignment();
        $divisions = $assignment->getBangladeshDivision();

        include 'pages/home.php';
    }
}