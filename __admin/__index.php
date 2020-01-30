<?php
require_once(__DIR__.'/Scrub.php');
require_once(__DIR__.'/ScrubConfig.php');

$scrub = new Scrub();

$process = isset($_GET['process']) ? $_GET['process'] :'';



if($process == 'showrecord'){
    $boolean = $scrub->selectData();
    echo '<pre>';
    print_r($boolean);
}


if($process == 'showconfig'){
    $sc = new ScrubConfig();

    $boolean = $sc->getScrubPercentage();
    echo '<pre>';
    print_r($boolean);
}

if($process == 'scrub'){
    $boolean = $scrub->decide();
    $scrub->processDone();
}



// $boolean = $scrub->processDone();

