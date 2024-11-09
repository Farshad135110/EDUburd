<?php

//user

class Student_Subject{

    use Model;

    protected $table = 'student_subject';
    protected $allowedColumns = [
        'student_id',
        'subject_id',
        'name'
    ];


}