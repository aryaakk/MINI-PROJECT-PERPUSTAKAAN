<?php

namespace Staditek\TH\App\Model;

use Staditek\TH\App\Config\Database;

class LoginModel extends Database
{

    public function findByEmail($email)
    {
        $statement = self::$conn->prepare("SELECT * FROM user_librarian WHERE email ='$email'");
        $statement->execute();
        // return self::execute($statement);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }
}
