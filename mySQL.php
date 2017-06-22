<?php

// database functions ************************************************

function fInsertToDatabase($dbConn) {
  $asin1 = 'B001J729ZW';
  $title1 = 'The Testaments of One Fold and One Shepherd';
  $price1 = 19.87;

  $asin2 = 'B00TFOKJ8A';
  $title2 = 'The Hobbit: Motion Picture Trilogy (Blu-ray)';
  $price2 = 54.93;

  $asin3 = 'B00I6JOBTI';
  $title3 = 'Lego Movie, The (Blu-ray)';
  $price3 = 12.99;

  $asin4 = 'B01N4S8DNK';
  $title4 = 'Harry Potter and the Deathly Hallows Pt.2 (Ultra HD/BD)';
  $price4 = 26.99;

  $asin5 = '55555';
  $title5 = 'No Title';
  $price5 = 0.00;

  $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES (:asin, :title, :price)";
  $stmt = $dbConn->prepare($sql);
  $stmt->execute([
    ':asin' => $asin1,
    ':title' => $title1,
    ':price' => $price1
  ]);
  $stmt->execute([
    ':asin' => $asin2,
    ':title' => $title2,
    ':price' => $price2
  ]);
  $stmt->execute([
    ':asin' => $asin3,
    ':title' => $title3,
    ':price' => $price3
  ]);
  $stmt->execute([
    ':asin' => $asin4,
    ':title' => $title4,
    ':price' => $price4
  ]);
  $stmt->execute([
    ':asin' => $asin5,
    ':title' => $title5,
    ':price' => $price5
  ]);
}

function fDeleteFromDatabase($dbConn) {
  $sql = "DELETE FROM dvdtitles WHERE asin='55555'";
  $stmt = $dbConn->prepare($sql);
  $stmt->execute();
}

function fListFromDatabase($dbConn) {
  $sql = 'SELECT asin, title, price FROM dvdtitles ORDER BY asin';
  $stmt = $dbConn->prepare($sql);
  $stmt->execute();
}


function fInsertToDatabaseActors($dbConn) {
  $actorID1 = 1;
  $fname1 = 'Thomas';
  $lname1 = 'Kofod';

  $actorID2 = 2;
  $fname2 = 'Rick';
  $lname2 = 'Macy';

  $actorID3 = 3;
  $fname3 = 'Martin';
  $lname3 = 'Freeman';

  $actorID4 = 4;
  $fname4 = 'Richard';
  $lname4 = 'Armitage';

  $actorID5 = 5;
  $fname5 = 'Chris';
  $lname5 = 'Pratt';

  $actorID6 = 6;
  $fname6 = 'Elizabeth';
  $lname6 = 'Banks';

  $actorID7 = 7;
  $fname7 = 'Rupert';
  $lname7 = 'Grint';

  $actorID8 = 8;
  $fname8 = 'Maggie';
  $lname8 = 'Smith';

  $actorID0 = 0;
  $fname0 = 'unknown';
  $lname0 = 'unknown';

  $sql = "INSERT INTO dvdActors (actorID, fname, lname) VALUES (:actorID, :fname, :lname)";
  $stmt = $dbConn->prepare($sql);
  $stmt->execute([
    ':actorID' => $actorID1,
    ':fname' => $fname1,
    ':lname' => $lname1
  ]);
  $stmt->execute([
    ':actorID' => $actorID2,
    ':fname' => $fname2,
    ':lname' => $lname2
  ]);
  $stmt->execute([
    ':actorID' => $actorID3,
    ':fname' => $fname3,
    ':lname' => $lname3
  ]);
  $stmt->execute([
    ':actorID' => $actorID4,
    ':fname' => $fname4,
    ':lname' => $lname4
  ]);
  $stmt->execute([
    ':actorID' => $actorID5,
    ':fname' => $fname5,
    ':lname' => $lname5
  ]);
  $stmt->execute([
    ':actorID' => $actorID6,
    ':fname' => $fname6,
    ':lname' => $lname6
  ]);
  $stmt->execute([
    ':actorID' => $actorID7,
    ':fname' => $fname7,
    ':lname' => $lname7
  ]);
  $stmt->execute([
    ':actorID' => $actorID8,
    ':fname' => $fname8,
    ':lname' => $lname8
  ]);
  $stmt->execute([
    ':actorID' => $actorID0,
    ':fname' => $fname0,
    ':lname' => $lname0
  ]);
}

function fDeleteFromDatabaseActors($dbConn) {
  $sql = "DELETE FROM dvdActors WHERE lname='unknown'";
  $stmt = $dbConn->prepare($sql);
  $stmt->execute();
}

function fListFromDatabaseActors($dbConn) {
  $sql = 'SELECT actorID, fname, lname FROM dvdActors ORDER BY actorID';
  $stmt = $dbConn->prepare($sql);
  $stmt->execute();
}
?>
