<?php

//user

class Course{

    use Model;

    protected $table = 'class';
    protected $allowedColumns = [
        'tutor_id',	
        'student_id',
        'subject_id',
        'date',	
        'time',	
        'status',
        'description'	

    ];


}