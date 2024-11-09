<?php

//user

class Parent{

    use Model;

    protected $table = 'parent';
    protected $allowedColumns = [
        'user_id',
        'student_id',
        'name',
        'nic'	
    ];


}