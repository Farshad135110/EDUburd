<?php

//user

class Student{

    use Model;

    protected $table = 'students';
    protected $allowedColumns = [
        'user_id',
        'name',
        'level',
        'parent_id',
        'dob'
    ];


}