<?php

//user

class Request{

    use Model;

    protected $table = 'request';
    protected $allowedColumns = [
        'student_id',
        'tutor_id',
        'status',

    ];


}