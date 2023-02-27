<?php

namespace App;

use \PDO;

class Users
{
    private $name;
    private $psw;
    private $email;

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_psw($psw)
    {
        $this->psw = $psw;
    }

    public function get_psw()
    {
        return $this->psw;
    }

    public function set_email($email)
    {
        $this->email = $email;
    }

    public function get_email()
    {
        return $this->email;
    }

    private function pdo($dbname)
    {
        $pdo = new PDO("mysql:hostname=localhost; dbname=" . $dbname, "root", "Tsizehena,223");
        return $pdo;
    }

    public function insert_user($dbname, $table, $name, $psw, $email)
    {
        $sql = "INSERT INTO " . $dbname . "." . $table . " (pseudo, password, email) VALUES (?, ?, ?)";
        $req = $this->pdo("e404")->prepare($sql);
        $req->execute([$name, $psw, $email]);
    }

    public function get_user($nom)
    {
        $sql = "SELECT * FROM e404.users WHERE pseudo = ?";
        $req = $this->pdo("e404")->prepare($sql);
        $req->execute([$nom]);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $user = $req->fetch();
        return $user;
    }
}
