<?php
class Client extends Dbh
{ //protected
    public function  getClient($cin,$password)
    {
        $sql = "SELECT * FROM client WHERE cin =? AND password=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$cin,$password]);

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function  setClient($cin,$prenom,$nom,$dateNaiss,$adresse,$ville,$tel,$email,$dateInscription,$password)
    {
        $sql = "INSERT INTO client (cin,prenom,nom,dateNaiss,adresse,ville,tel,email,dateInscription,password) 
        VALUES (?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$cin,$prenom,$nom,$dateNaiss,$adresse,$ville,$tel,$email,$dateInscription,$password]);

      
    }
}