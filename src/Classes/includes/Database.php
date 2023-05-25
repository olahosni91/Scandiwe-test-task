<?php

namespace Classes\includes;

use mysqli;

class Database{

    private const SERVER = 'localhost';
    private const USER = 'root';
    private const PASSWORD = '';
    private const DATABASE = 'scandiweb';

    public function connect()
    {
        return new mysqli(
            self::SERVER,
            self::USER,
            self::PASSWORD,
            self::DATABASE
        );
    }

    

   

    

    
}