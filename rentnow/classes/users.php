<?php
class Users extends Dbh
{ //protected
    public function  getUser($name,$password)
    {
        $sql = "SELECT * FROM users WHERE username =? AND password=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name,$password]);

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function  setUser($name,$pass)
    {
        $sql = "INSERT INTO users (username,password) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name,$pass]);

      
    }
}