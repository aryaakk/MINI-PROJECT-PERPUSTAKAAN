<?php

namespace Staditek\TH\App\Model;

use Staditek\TH\App\Config\Database;

class LibrarianModel extends Database
{

    public function ShowLibrarian()
    {
        $statement = self::$conn->prepare("SELECT * FROM user_librarian");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function AddLibrarian($data)
    {
        $statement = self::$conn->prepare("INSERT INTO user_librarian (card_id, username, email, phone, password, gender, alamat, created_at, updated_at) VALUES(
            :card_id,
            :username,
            :email,
            :phone,
            :password,
            :gender,
            :alamat,
            :created_at,
            :updated_at
        )");
        var_dump($statement);
        return $statement->execute($data);
    }

    public function getByLibrarianID($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM user_librarian WHERE id_librarian = $id");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function UpdateSaveLibrarian($data)
    {
        $statement = self::$conn->prepare("UPDATE user_librarian SET 
            card_id = :card_id,
            username = :username,
            email = :email,
            phone = :phone,
            password = :password,
            gender = :gender,
            alamat = :alamat,
            updated_at = :updated_at
            WHERE id_librarian = :id_librarian
        ");
        return $statement->execute($data);
    }

    public function deleteLibrarian($id){
        $statement = self::$conn->prepare("DELETE FROM user_librarian WHERE id_librarian = $id");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }
}
