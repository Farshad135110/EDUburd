<?php

//user

class Admin{

    use Model;

    protected $table = 'admin';
    protected $allowedColumns = [
        'user_id',
        'name',
        'role',
    ];


}