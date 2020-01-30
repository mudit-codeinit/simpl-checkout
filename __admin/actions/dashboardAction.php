<?php
$logout = isset($_REQUEST['logout']) ? $_REQUEST['logout'] :'';

if($logout =='yes'){
    session_destroy();
    header("Location:index.php");
}

$defaultUserName = 'emerchant';
$session_id = isset($_SESSION['session_id']) ? $_SESSION['session_id'] :'';

if($session_id=='' && $session_id!=base64_encode($defaultUserName)){
    header("Location:index.php");
}



include(__DIR__.'/../ScrubConfig.php');

$sc = new ScrubConfig();
$scResponse = $sc->getScrubPercentage();


$scrubbing_percentage  = isset($scResponse['scrubbing_percentage']) ? $scResponse['scrubbing_percentage'] :'';
$id  = isset($scResponse['id']) ? $scResponse['id'] :'';


$scrubbing_form = isset($_POST['scrubbing_form']) ? $_POST['scrubbing_form'] :'';

if($scrubbing_form == 'yes'){
    $scrubbing_percentage = isset($_POST['scrubbing_percentage']) ? $_POST['scrubbing_percentage'] :'';
    $id = isset($_POST['id']) ? $_POST['id'] :'';

    if($scrubbing_percentage!='' && $id!=''){
        $sc->updateTable($scrubbing_percentage , $id);
    }
}