<?php

//user

class Tutor{

    use Model;

    protected $table = 'tutor';
    protected $allowedColumns = [
        'user_id',
        'name',
        'nic',
        'cv'
       

    ];


}