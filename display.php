<!DOCTYPE html>
<html>
<body>

<?php
include("configration.php");
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>username</th><th>email</th><th>usertype</th><th>password</th><th>status</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 


try {
    $conn = mysqli_connect("localhost","root","","house");
   // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT username, email, usertype, password, status FROM account"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->mysql_fetch_assoc($conn::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 

</body>
</html>