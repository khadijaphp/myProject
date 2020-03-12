<?php

class ClientController extends Client
{
    public function createClient($cin,$prenom,$nom,$dateNaiss,$adresse,$ville,$tel,$email,$dateInscription,$password)
    {
       $this->setClient($cin,$prenom,$nom,$dateNaiss,$adresse,$ville,$tel,$email,$dateInscription,$password);
    }
}