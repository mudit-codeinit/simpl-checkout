<?php
$error = '';
$form_post = isset($_REQUEST['form_post']) ? $_REQUEST['form_post'] :'';
$defaultUserName = 'admin';

$session_id = isset($_SESSION['session_id']) ? $_SESSION['session_id'] :'';

if($session_id!='' && $session_id==base64_encode($defaultUserName)){
    header("Location:dashboard.php");
}


if($form_post!='' && $form_post=='yes'){
    
    
    $user_name= isset($_REQUEST['user_name']) ? $_REQUEST['user_name'] :'';
    $password = isset($_REQUEST['password']) ? $_REQUEST['password'] :'';

    if($user_name==''){
        $error.='<li>Please enter valid user name</li>';
    }

    if($password == ''){
        $error.='<li>Please enter valid password</li>';
    }

    if($user_name == $defaultUserName && $password=="admin@123"){
        $_SESSION['session_id'] = base64_encode($defaultUserName);

        header("Location:dashboard.php");
    }
    
}

