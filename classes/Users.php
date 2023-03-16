<?php

class Users
{
    private $dbh2;
    private $user_email;
    private $user_pwd;
    private $pwdRepeat;
    private $data;

    public function __construct()
    {
        $this->dbh2 = new Database();
    }

    //Create user

    public function getUser($id)
    {
        $this->dbh2->query("SELECT * FROM users WHERE id = :id");
        $this->dbh2->bind(':id', $id);
        return $this->dbh2->single();
    }


    public function check_email_exists($user_email) 
    {
        $this->dbh2->query("SELECT * FROM users WHERE user_email= :user_email");
        $this->dbh2->bind(':user_email', $user_email);
        return $this->dbh2->single();

        if ($result->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function validate_password($user_pwd, $pwdRepeat) 
    {
        if ($user_pwd == $pwdRepeat) {
            return true;
        } else {
            return false;
        }
    }

    public function sign_up($user_email, $user_pwd, $pwdRepeat) 
    {
        if ($this->check_email_exists($user_email)) 
        {
            redirect('signup-page.php', 'Email already exists', 'error') ;
        } 

        elseif (!$this->validate_password($user_pwd, $pwdRepeat)) 
        {
            redirect('signup-page.php', 'Passwords does not match', 'error') ;

        } 

        else 
        {
            $this->dbh2->query("INSERT INTO users (user_email, user_pwd) VALUES (:user_email, :user_pwd)");
            $this->dbh2->bind(':user_email', $user_email);
            $this->dbh2->bind(':user_pwd', $user_pwd);
            return $this->dbh2->execute();

        }
    }

    public function login($user_email, $user_pwd) 
    {
       
        $this->dbh2->query("SELECT * FROM users WHERE user_email= :user_email AND user_pwd = :user_pwd");
        $this->dbh2->bind(':user_email', $user_email);
        $this->dbh2->bind(':user_pwd', $user_pwd);
        $result = $this->dbh2->single();
        return $result;

        if ($result->rowCount() == 1) 
        {
            return true;        
        } 
        else 
        {
            return false;
        }

    }
    
}
