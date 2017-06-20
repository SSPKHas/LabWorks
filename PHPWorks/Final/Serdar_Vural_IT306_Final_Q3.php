<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Q3 Serdar Vural</title>
  </head>
  <body>
    <a href="index.htm">index</a>
    <form class="" action="Serdar_Vural_IT306_Final_Q3.php" method="post">
      <input type="submit" name="a" value="Q3/A">
      <input type="submit" name="b" value="Q3/B">
      <input type="submit" name="c" value="Q3/C">
      <input type="submit" name="d" value="Q3/D">
      <input type="submit" name="s" value="Q3/CreateTableSql">

    </form>
  </body>
</html>

<?php
// live on: http://khasdeneme.azurewebsites.net/Final/index.htm

// azure üzerindeki db üzerinde çalıştım
$databasehost = "eu-cdbr-azure-west-d.cloudapp.net";
$databasename = "acsm_b798f004ac453b5";
$databaseusername ="bf4e9295ce98d6";
$databasepassword = "cc63d47d";

$conn = mysqli_connect($databasehost,$databaseusername,$databasepassword, $databasename) or die(mysqli_error($con));
mysqli_set_charset ($conn , "utf8");

/* table SQL
CREATE TABLE `names` (
  `Name` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `ID` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

CREATE TABLE `courses` (
  `ID` varchar(15) NOT NULL,
  `CName` varchar(45) NOT NULL,
  `Semester` varchar(45) NOT NULL,
  `Classroom` varchar(45) NOT NULL,
  `CID` varchar(45) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
*/

if (isset($_POST['s'])) {
  echo "CREATE TABLE `names` (
    `Name` varchar(15) NOT NULL,
    `LastName` varchar(15) NOT NULL,
    `ID` varchar(15) NOT NULL,
    PRIMARY KEY (`ID`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 <br>";
  echo "CREATE TABLE `courses` (
    `ID` varchar(15) NOT NULL,
    `CName` varchar(45) NOT NULL,
    `Semester` varchar(45) NOT NULL,
    `Classroom` varchar(45) NOT NULL,
    `CID` varchar(45) NOT NULL,
    PRIMARY KEY (`CID`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
}

if (isset($_POST['a'])) {
  $queryA = "select * from courses where Semester = 'Spring'";
  $resultA = $conn->query($queryA);

  if($resultA->num_rows > 0) {
      echo "<h2>Result:</h2>";
      echo "<table>";
      echo "<tr><th>ID</th>";
      echo "<th>Course Name</th>";
      echo "<th>Semester</th>";
      echo "<th>Classroom</th>";
      echo "<th>Course ID</th></tr>";
      while($course = $resultA->fetch_assoc())  {
          echo "<tr><td>".$course['ID']."</td>";
          echo "<td>".$course['CName']."</td>";
          echo "<td>".$course['Semester']."</td>";
          echo "<td>".$course['Classroom']."</td>";
          echo "<td>".$course['CID']."</td></tr>";
      }
       echo "</table>";
  } else {
      echo "<h3>No result.</h3>";
  }
}

if (isset($_POST['b'])) {
  $queryB = "select names.Name, names.LastName, courses.CName from courses left join names on names.ID = courses.ID where names.ID = 'PDR_1'";
  $resultB = $conn->query($queryB);

  if($resultB->num_rows > 0) {
      echo "<h2>Result:</h2>";
      echo "<table>";
      echo "<tr><th>Name</th>";
      echo "<th>Last Name</th>";
      echo "<th>Course Name</th></tr>";
      while($course = $resultB->fetch_assoc())  {
          echo "<tr><td>".$course['Name']."</td>";
          echo "<td>".$course['LastName']."</td>";
          echo "<td>".$course['CName']."</td></tr>";
      }
       echo "</table>";
  } else {
      echo "<h3>No result.</h3>";
  }
}

if (isset($_POST['c'])) {
  $queryC = "select names.Name, names.LastName, courses.CName, courses.Semester from courses left join names on names.ID = courses.ID where names.ID = 'ASTDR_1' and courses.Semester = 'Fall'";
  $resultC = $conn->query($queryC);

  if($resultC->num_rows > 0) {
      echo "<h2>Result:</h2>";
      echo "<table>";
      echo "<tr><th>Name</th>";
      echo "<th>Last Name</th>";
      echo "<th>Course Name</th>";
      echo "<th>Semester</th></tr>";
      while($course = $resultC->fetch_assoc())  {
          echo "<tr><td>".$course['Name']."</td>";
          echo "<td>".$course['LastName']."</td>";
          echo "<td>".$course['CName']."</td>";
          echo "<td>".$course['Semester']."</td></tr>";
      }
       echo "</table>";
  } else {
      echo "<h3>No result.</h3>";
  }
}

if (isset($_POST['d'])) {
  $queryD = "select names.Name, names.LastName, courses.CName, courses.Semester, courses.Classroom from courses left join names on names.ID = courses.ID where names.ID = 'LR2' and courses.Semester = 'Fall'";
  $resultD = $conn->query($queryD);

  if($resultD->num_rows > 0) {
      echo "<h2>Result:</h2>";
      echo "<table>";
      echo "<tr><th>Name</th>";
      echo "<th>Last Name</th>";
      echo "<th>Course Name</th>";
      echo "<th>Semester</th>";
      echo "<th>ClassRoom</th></tr>";
      while($course = $resultD->fetch_assoc())  {
          echo "<tr><td>".$course['Name']."</td>";
          echo "<td>".$course['LastName']."</td>";
          echo "<td>".$course['CName']."</td>";
          echo "<td>".$course['Semester']."</td>";
          echo "<td>".$course['Classroom']."</td></tr>";
      }
       echo "</table>";
  } else {
      echo "<h3>No result.</h3>";
  }
}

 ?>
