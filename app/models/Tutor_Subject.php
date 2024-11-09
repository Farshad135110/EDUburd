<?php

//user

class Tutor_Subject{

    use Model;

    protected $table = 'tutor_subject';
    protected $allowedColumns = [
        'tutor_id',
        'subject_id',
        'name'
       

    ];


}