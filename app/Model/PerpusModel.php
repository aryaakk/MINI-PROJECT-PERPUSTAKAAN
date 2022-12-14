<?php

namespace Staditek\TH\App\Model;
use Staditek\TH\App\Config\Database;

class PerpusModel extends Database{

    public function HitungMember(){
        $statement = self::$conn->prepare("SELECT * FROM member");
        $statement->execute();

        return $statement->rowCount();
    }
    public function HitungBook(){
        $statement = self::$conn->prepare("SELECT * FROM book_table");
        $statement->execute();

        return $statement->rowCount();
    }
    public function HitungOfficer(){
        $statement = self::$conn->prepare("SELECT * FROM user_librarian");
        $statement->execute();

        return $statement->rowCount();
    }

    public function tampilBook(){
        $statement = self::$conn->prepare("SELECT * FROM book_table");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function AddBook($data){
        $statement = self::$conn->prepare("INSERT INTO book_table (isbn, book_title, author, max_rent, price_rent) VALUES(
            :isbn,
            :book_title,
            :author,
            :max_rent,
            :price_rent
        )");
        return $statement->execute($data);
    }

    public function getByBookId($id){
        $statement = self::$conn->prepare("SELECT * FROM book_table WHERE book_id = $id");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function UpdateSave($data){
        $statement = self::$conn->prepare("UPDATE book_table SET 
            isbn = :isbn,
            book_title = :book_title,
            author = :author,
            max_rent = :max_rent,
            price_rent = :price_rent
            WHERE book_id = :book_id
        ");
        return $statement->execute($data);
    }

    public function deleteBook($id){
        $statement = self::$conn->prepare("DELETE FROM book_table WHERE book_id = $id");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }
}