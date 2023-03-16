<?php
include_once 'config/init.php';

$user = new Users();

if(isset($_POST['submit'])) {
    $data = array();

    $data['user_email'] = $_POST['user_email'];
    $data['user_pwd'] = $_POST['user_pwd'];
    $data['pwdRepeat'] = $_POST['pwdRepeat'];

    $user_id = isset($_GET['id']) ? $_GET['id'] : null;

    $template = new Template('templates/signup.php');
    $template->user = $user->getUser($user_id);

    if($user->sign_up($data['user_email'], $data['user_pwd'], $data['pwdRepeat'])) 
    {
        redirect('index.php', 'User registered successfully', 'success');
    } 
    else 
    {
        redirect('signup.php', 'Something went wrong', 'error');
    }
}

$template = new Template('templates/signup.php');
echo $template;
?>


