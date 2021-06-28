<?php

class DatabaseUtilities
{
    public static function getConnection($dbName)
    {
        $host = 'localhost:3306';
        $userName = 'root';
        $password = '';

        $connection = mysqli_connect($host, $userName, $password, $dbName);

        if(mysqli_connect_errno())
        {
            echo "Failed to connect to database : " . mysqli_connect_errno();
        }
        return $connection;
    }
}

?>
