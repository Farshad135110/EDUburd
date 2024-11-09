<?php

//user

class User{

    use Model;

    protected $table = 'user';
    protected $allowedColumns = [
        'name',
        'email',
        'role',
        'password'
       


    ];


}