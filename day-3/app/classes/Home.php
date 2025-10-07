<?php

namespace App\classes;

class Home
{
    public $student=[];
    public function __construct(){
        $this->student=[
            0=>[
                'CourseTitle'=>' web development',
                'Course-Code'=>' CSE06123',
                'Grade'=> '4',
            ],
            1=>[
                'CourseTitle'=>' Database',
                'Course-Code'=>' CSE061303',
                'Grade'=> '3',
            ],
            2=>[
                'CourseTitle'=>'Data communication',
                'Course-Code'=>' CSE0613203',
                'Grade'=> '4',
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