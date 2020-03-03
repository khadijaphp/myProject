<?php

class UsersController extends Users
{
    public function createUser($name,$pass)
    {
       $this->setUser($name,$pass);
    }
}