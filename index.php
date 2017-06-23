<?php

include '../dbConnect.php'; // use include instead of require
include '../mySQL.php';

$myDBconn = fConnectToDatabase();

//fInsertToDatabase($myDBconn);
//fDeleteFromDatabase($myDBconn);
//fListFromDatabase($myDBconn);

//fInsertToDatabaseActors($myDBconn);
//fDeleteFromDatabaseActors($myDBconn);
//fListFromDatabaseActors($myDBconn);

fInsertToDatabaseTitlesActors($myDBconn);
fDeleteFromDatabaseTitlesActors($myDBconn);
fUpdateDatabaseTitlesActors($myDBconn);
fJoinDatabasesTitlesActors($myDBconn);
//print_r($myDBconn); // prints that $myDB is a PDO Object to the browser page

  echo '<html>
          <head>
            <title>CS3620: Assignment 4</title>
          </head>
          <body>
            <div>ALL DONE!</div>
          </body>
        </html>';
