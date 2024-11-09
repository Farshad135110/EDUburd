<?php

//user

class Resource_Library{

    use Model;

    protected $table = 'resource_library';
    protected $allowedColumns = [
        'user_id',
        'title',
        'description',
        'type',
        'file_path',
        'reviews'
    ];


}