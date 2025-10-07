<?php

namespace App\classes;

class Home
{
    public $message,$firstname,$lastname,$fullName, $firstNumber, $secondNumber,$thirdNumber;
    public $data=[];
    public $student=[];
    public function __construct(){
        $this->message="Welcome to Home";
        $this->student=[
            0=>[
                'name'=>'Arif',
                'mobile'=>[
                    'personal'=>'017895',
                    'guardian'=>'019865',
                ],
                'email'=>'arif@gmail.com',
            ],
            1=>[
                'name'=>'Imad',
                'mobile'=>[
                    'personal'=>'013895',
                    'guardian'=>'019562',
                ],
                'email'=>'imad@gmail.com',
            ],
            2=>[
                'name'=>'Ayaat',
                'mobile'=>[
                    'personal'=>'017495',
                    'guardian'=>'017765',
                ],
                'email'=>'ayaat@gmail.com',
            ],
        ];
    }
    public function getAllStudent(){
        return $this->student;
    }
    public function index(){
        header('Location:action.php?page=home');
    }

}