<?php

namespace Staditek\TH\App\Controller;

use Staditek\TH\App\Core\Router;
use Staditek\TH\App\Core\View;
use Staditek\TH\App\Model\LibrarianModel;

class ControllLibrarian{
    public static $model;

    public function __construct(){
        self::$model = new LibrarianModel;
    }

    public function ShowLibrarian(){
        $data['librarian'] = self::$model->ShowLibrarian();
        View::ViewPerpuss('showLibrarian', $data);
    }

    public function AddLibrarian(){
        View::ViewPerpuss('addLibrarian');
    }

    public function SaveeLibrarian(){
        $insertLibrarian = array(
            'card_id' => $_POST['cardid'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT), 
            'gender' => $_POST['gender'],
            'alamat' => $_POST['alamat'],
            'created_at' => null,
            'updated_at' => null
        );
        // die(var_dump($insertLibrarian)); 
        if (!self::$model->AddLibrarian($insertLibrarian)) {
            echo "<script>alert('ADD LIBRARIAN FAILED');
            window.location.href = '".Router::url('/AddLibrarian')."';
            </script>";
        } else {
            echo "<script>alert('ADD LIBRARIAN SUCCESSFUL');
            window.location.href = '".Router::url('/AddLibrarian')."';
            </script>";
        }
    }

    public function EditLibrarian($id){
        $data['id_lib'] = self::$model->getByLibrarianID($id);
        View::ViewPerpuss('editLibrarian', $data);
    }

    public function UpdateLibrarian(){
        $updateLibrarian = array(
            'id_librarian' => $_POST['idlib'],
            'card_id' => $_POST['cardid'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT), 
            'gender' => $_POST['gender'],
            'alamat' => $_POST['alamat'],
            'updated_at' => date('Y-m-d H:i:s')
        );
        // die(var_dump($insertLibrarian)); 
        if (!self::$model->UpdateSaveLibrarian($updateLibrarian)) {
            echo "<script>alert('ADD LIBRARIAN FAILED');
            window.location.href = '".Router::url('/ShowLibrarian')."';
            </script>";
        } else {
            echo "<script>alert('ADD LIBRARIAN SUCCESSFUL');
            window.location.href = '".Router::url('/ShowLibrarian')."';
            </script>";
        }
    }

    public function deleteLibrarian($id){
        if (self::$model->deleteLibrarian($id)) {
            echo "<script>alert('DELETE LIBRARIAN SUCCESSFUL');
            window.location.href = '".Router::url('/ShowLibrarian')."';
            </script>";
        }else {
            echo "<script>alert('DELETE LIBRARIAN FAILED');
            window.location.href = '".Router::url('/ShowLibrarian')."';</script>";
        }
    }
}