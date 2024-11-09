<?php

//user

class Tutor_Student{

    use Model;

    protected $table = 'tutor_student';
    protected $allowedColumns = [
        'tutor_id',
        'student_id',
        'subject_id'
        

    ];


}