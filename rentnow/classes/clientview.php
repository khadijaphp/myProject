<?php

class ClientView extends Client
{
    public function showClient($cin,$pass)
    {
        $result=$this->getClient($cin,$pass);
        echo "name: ".$result[0]['cin']. '<br>s';
        echo "password: ".$result[0]['password'];
    }
}