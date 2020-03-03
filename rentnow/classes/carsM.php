<?php
class CarsM extends Dbh
{
    protected function  getCar()
    {
        $sql = "SELECT * FROM voiture";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function  setUser()
    {
        $sql = "INSERT INTO users (username,password) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

      
    }
}
