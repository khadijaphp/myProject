<?php

class UsersView extends Users
{
    public function showUser($user,$pass)
    {
        $result=$this->getUser($user,$pass);
        echo "name: ".$result[0]['username']. '<br>s';
        echo "password: ".$result[0]['password'];
    }
}