<?php

namespace Staditek\TH\App\Controller;


use Staditek\TH\App\Core\Router;
use Staditek\TH\App\Core\View;
use Staditek\TH\App\Model\MemberModel;
use Staditek\TH\App\Model\PerpusModel;

class ControllMember{
    public static $model;

    public function __construct(){
        self::$model = new MemberModel;
    }

    public function ShowMember(){
        $data['member'] = self::$model->showMember();
        View::ViewPerpuss('showMember', $data);
    }

    public function AddMember(){
        View::ViewPerpuss('addMember');
    }

    public function deleteMember($id){
        if (self::$model->deleteMember($id)) {
            echo "<script>alert('DELETE MEMBER SUCCESSFUL');
            window.location.href = '".Router::url('/ShowMember')."';
            </script>";
        }else {
            echo "<script>alert('DELETE MEMBER FAILED');
            window.location.href = '".Router::url('/ShowMember')."';</script>";
        }
    }
}