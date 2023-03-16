<?php
include_once 'config/init.php';

$user = new Users();

if(isset($_POST['submit'])) {
    $data = array();

    $data['user_email'] = $_POST['user_email'];
    $data['user_pwd'] = $_POST['user_pwd'];

    $user_id = isset($_GET['id']) ? $_GET['id'] : null;
    $user_pwd = isset($_GET['user_email']) ? $_GET['user_email'] : null;

    $user_pwd = isset($_GET['user_pwd']) ? $_GET['user_pwd'] : null;


    $template = new Template('templates/login.php');
    $template->user = $user->getUser($user_id);
    //$template->user = $user->login($data['user_email'], $data['user_pwd'])


    if($user->login($data['user_email'], $data['user_pwd'])) 
    {
        redirect('index.php', 'Log in successfull', 'success');
    } 
    else 
    {
        redirect('loginpage.php', 'Username or password did not match', 'error');
    }
}

$template = new Template('templates/login.php');
echo $template;
?>


