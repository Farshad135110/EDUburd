<?php

//user

class Subject{

    use Model;

    protected $table = 'subject';
    protected $allowedColumns = [
        'name',
        'level',
        'description'
        

    ];


}