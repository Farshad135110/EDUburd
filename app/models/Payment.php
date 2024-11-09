<?php

//user

class Payment{

    use Model;

    protected $table = 'payment';
    protected $allowedColumns = [
        'student_id',
        'tutor_id',
        'subject_id',
        'amount',
        'method'	
    ];


}