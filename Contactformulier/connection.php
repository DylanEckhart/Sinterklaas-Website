<?php

    function databaseConnection() {

        // Connection inputs to MySQL database
        $servername = "localhost";
        $username = "almeresintevents_nl_sinterklaas";
        $password = "7xGzuN7HQVsU";
        $databaseName = "almeresintevents_nl_sinterklaas";

        // Connect to database "sinterklaas"
        $connection = mysqli_connect($servername, $username, $password, $databaseName);

        // Check if connection is working
        if ($connection->connect_error) {
            echo 'console.log("Connection failed!")';
        } else {
            echo 'console.log("Connection succesfull!")';
        }

        return $connection;
}