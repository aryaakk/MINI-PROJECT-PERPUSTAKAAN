<?php

namespace Staditek\TH\App\Controller;


use Staditek\TH\App\Core\Router;
use Staditek\TH\App\Core\View;
use Staditek\TH\App\Model\PerpusModel;

class ControllPerpus{
    public static $model;

    public function __construct(){
        self::$model = new PerpusModel;
    }

    public function TampilDash(){
        $data['hitung_member'] = self::$model->HitungMember();
        $data['hitung_book'] = self::$model->HitungBook();
        $data['hitung_officer'] = self::$model->HitungOfficer();
        View::ViewPerpuss('dashboard', $data);
    }
    public function TampilBuku(){
        $data['tampil_book'] = self::$model->tampilBook();
        View::ViewPerpuss('showBook', $data);
    }
    public function AddBuku(){
        View::ViewPerpuss('addBook');
    }
    public function SaveeBook(){
        $insertBook = array(
            'isbn' => $_POST['isbn'],
            'book_title' => $_POST['title'],
            'author' => $_POST['author'],
            'max_rent' => $_POST['rental'],
            'price_rent' => $_POST['price']
        );
        var_dump($insertBook);
        if (!self::$model->AddBook($insertBook)) {
            echo "<script>alert('ADD BOOK FAILED');
            window.location.href = '".Router::url('/AddBuku')."';
            </script>";
        } else {
            echo "<script>alert('ADD BOOK SUCCESSFUL');
            window.location.href = '".Router::url('/AddBuku')."';
            </script>";
        }
    }

    public function EditBook($id){
        $data['book_id'] = self::$model->getByBookId($id);
        View::ViewPerpuss('editBook', $data);
    }

    public function UpdateBook(){
        $updateBook = array(
            'book_id' => $_POST['id_book'],
            'isbn' => $_POST['isbn'],
            'book_title' => $_POST['title'],
            'author' => $_POST['author'],
            'max_rent' => $_POST['rental'],
            'price_rent' => $_POST['price']
        );
        if (!self::$model->UpdateSave($updateBook)) {
            echo "<script>alert('EDIT BOOK FAILED');
            window.location.href = '".Router::url('/ShowBuku')."';
            </script>";
        } else {
            echo "<script>alert('EDIT BOOK SUCCESSFUL');
            window.location.href = '".Router::url('/ShowBuku')."';
            </script>";
        }
    }

    public function deleteBook($id){
        if (self::$model->deleteBook($id)) {
            echo "<script>alert('DELETE BOOK SUCCESSFUL');
            window.location.href = '".Router::url('/ShowBuku')."';
            </script>";
        }else {
            echo "<script>alert('DELETE BOOK FAILED');
            window.location.href = '".Router::url('/ShowBuku')."';</script>";
        }
    }
}