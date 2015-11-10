<h3>5.1 create database</h3>
<pre>CREATE DATABASE testdb;</pre>
<h3>5.2 create table in database</h3>
<pre>CREATE TABLE symbols (

    id int(11) NOT NULL auto_increment,

    country varchar(255) NOT NULL default '',

    animal varchar(255) NOT NULL default '',

    PRIMARY KEY  (id)

) TYPE=MyISAM;</pre>
<h3>5.3 INSERT INTO</h3>
<pre>INSERT INTO symbols VALUES (1, 'America', 'eagle');

INSERT INTO symbols VALUES (2, 'China', 'dragon');

INSERT INTO symbols VALUES (3, 'England', 'lion');

INSERT INTO symbols VALUES (4, 'India', 'tiger');

INSERT INTO symbols VALUES (5, 'Australia', 'kangaroo');

INSERT INTO symbols VALUES (6, 'Norway', 'elk');</pre>
<h3>5.4 connect to db and run query //mysql_fetch_row</h3>
<textarea disabled>// set database server access variables:

$host = "localhost";

$user = "test";

$pass = "test";

$db = "testdb";

// open connection

$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

// select database

mysql_select_db($db) or die ("Unable to select database!");

// create query

$query = "SELECT * FROM symbols";

// execute query

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

// see if any rows were returned

if (mysql_num_rows($result) > 0) {

    // yes

    // print them one after another

    echo "<table cellpadding=10 border=1>";

    while($row = mysql_fetch_row($result)) {

        echo "<tr>";

        echo "<td>".$row[0]."</td>";

        echo "<td>".$row[1]."</td>";

        echo "<td>".$row[2]."</td>";

        echo "</tr>";

    }

    echo "</table>";

}

else {

    // no

    // print status message

    echo "No rows found!";

}

// free result set memory

mysql_free_result($result);

// close connection

mysql_close($connection);</textarea>
<h3>5.5 connect to db and run query //list() = mysql_fetch_row</h3>
<textarea disabled>// set server access variables

$host = "localhost";

$user = "test";

$pass = "test";

$db = "testdb";

// open connection

$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

// select database

mysql_select_db($db) or die ("Unable to select database!");

// create query

$query = "SELECT * FROM symbols";

// execute query

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

// see if any rows were returned

if (mysql_num_rows($result) > 0) {

     // yes

     // print them one after another

     echo "<table cellpadding=10 border=1>";

     while(list($id, $country, $animal)  = mysql_fetch_row($result)) {

          echo "<tr>";

          echo "<td>$id</td>";

          echo "<td>$country</td>";

          echo "<td>$animal</td>";

          echo "</tr>";

     }

     echo "</table>";

}

else {

     // no

     // print status message

     echo "No rows found!";

}

// free result set memory

mysql_free_result($result);

// close connection

mysql_close($connection);</textarea>
<h3>5.6 connect to db and run query //mysql_fetch_assoc()</h3>
<textarea disabled>// set server access variables

$host = "localhost";

$user = "test";

$pass = "test";

$db = "testdb";

// open connection

$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

// select database

mysql_select_db($db) or die ("Unable to select database!");

// create query

$query = "SELECT * FROM symbols";

// execute query

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

// see if any rows were returned

if (mysql_num_rows($result) > 0) {

    // yes

    // print them one after another

    echo "<table cellpadding=10 border=1>";

    while($row = mysql_fetch_assoc($result)) {

        echo "<tr>";

        echo "<td>".$row['id']."</td>";

        echo "<td>".$row['country']."</td>";

        echo "<td>".$row['animal']."</td>";

        echo "</tr>";

    }

    echo "</table>";

}

else {

    // no

    // print status message

    echo "No rows found!";

}

// free result set memory

mysql_free_result($result);

// close connection

mysql_close($connection);</textarea>
<h3>5.7 connect to db and run query //mysql_fetch_object</h3>
<textarea disabled>// set server access variables

$host = "localhost";

$user = "test";

$pass = "test";

$db = "testdb";

// open connection

$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

// select database

mysql_select_db($db) or die ("Unable to select database!");

// create query

$query = "SELECT * FROM symbols";

// execute query

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

// see if any rows were returned

if (mysql_num_rows($result) > 0) {

    // yes

    // print them one after another

    echo "<table cellpadding=10 border=1>";

    while($row  = mysql_fetch_object($result)) {

        echo "<tr>";

        echo "<td>".$row->id."</td>";

        echo "<td>".$row->country."</td>";

        echo "<td>".$row->animal."</td>";

        echo "</tr>";

    }

    echo "</table>";

}

else {

    // no

    // print status message

    echo "No rows found!";

}

// free result set memory

mysql_free_result($result);

// close connection

mysql_close($connection);</textarea>
<h3>5.8 MySQLi procedural</h3>
<textarea disabled>// set server access variables

$host = "localhost";

$user = "test";

$pass = "test";

$db = "testdb";

// open connection

$connection = mysqli_connect($host, $user, $pass, $db) or die ("Unable to connect!");

// create query

$query = "SELECT * FROM symbols";

// execute query

$result = mysqli_query($connection, $query) or die ("Error in query: $query. ".mysqli_error());

// see if any rows were returned

if (mysqli_num_rows($result) > 0) {

    // yes

    // print them one after another

    echo "<table cellpadding=10 border=1>";

    while($row = mysqli_fetch_row($result)) {

        echo "<tr>";

        echo "<td>".$row[0]."</td>";

        echo "<td>".$row[1]."</td>";

        echo "<td>".$row[2]."</td>";

        echo "</tr>";

    }

    echo "</table>";

}

else {

    // no

    // print status message

    echo "No rows found!";

}

// free result set memory

mysqli_free_result($result);

// close connection

mysqli_close($connection);</textarea>
<h3>5.9 MySQLi object</h3>
<textarea disabled>// set server access variables

$host = "localhost";

$user = "test";

$pass = "test";

$db = "testdb";

// create mysqli object

// open connection

$mysqli = new mysqli($host, $user, $pass, $db);

// check for connection errors

if (mysqli_connect_errno()) {

    die("Unable to connect!");

}

// create query

$query = "SELECT * FROM symbols";

// execute query

if ($result = $mysqli->query($query)) {

    // see if any rows were returned

    if ($result->num_rows > 0) {

        // yes

        // print them one after another

        echo "<table cellpadding=10 border=1>";

        while($row = $result->fetch_array()) {

            echo "<tr>";

            echo "<td>".$row[0]."</td>";

            echo "<td>".$row[1]."</td>";

            echo "<td>".$row[2]."</td>";

            echo "</tr>";

        }

        echo "</table>";

    }

    else {

        // no

        // print status message

        echo "No rows found!";

    }

    // free result set memory

    $result->close();

}

else {

    // print error message

    echo "Error in query: $query. ".$mysqli->error;

}

// close connection

$mysqli->close();</textarea>
<h3>5.10 INSERT INTO</h3><div>
<textarea disabled>
<php

if (!isset($_POST['submit'])) {

// form not submitted

?>



    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

    Country: <input type="text" name="country">

    National animal: <input type="text" name="animal">

    <input type="submit" name="submit">

    </form>

<?ph

}

else {

// form submitted

// set server access variables

    $host = "localhost";

    $user = "test";

    $pass = "test";

    $db = "testdb";

    

// get form input

    // check to make sure it's all there

    // escape input values for greater safety

    $country = empty($_POST['country']) ? die ("ERROR: Enter a country") : mysql_escape_string($_POST['country']);

    $animal = empty($_POST['animal']) ? die ("ERROR: Enter an animal") : mysql_escape_string($_POST['animal']);

    // open connection

    $connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

    

    // select database

    mysql_select_db($db) or die ("Unable to select database!");

    

    // create query

    $query = "INSERT INTO symbols (country, animal) VALUES ('$country', '$animal')";

    

    // execute query

    $result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

    

    // print message with ID of inserted record

    echo "New record inserted with ID ".mysql_insert_id();

    

    // close connection

    mysql_close($connection);

}

?></textarea></div>
<h3>5.11 DELETE</h3>
<textarea disabled>// set server access variables

$host = "localhost";

$user = "test";

$pass = "test";

$db = "testdb";

// create mysqli object

// open connection

$mysqli = new mysqli($host, $user, $pass, $db);

// check for connection errors

if (mysqli_connect_errno()) {

    die("Unable to connect!");

}

// if id provided, then delete that record

if (isset($_GET['id'])) {

// create query to delete record

    $query = "DELETE FROM symbols WHERE id = ".$_GET['id'];

    

// execute query

    if ($mysqli->query($query)) {

    // print number of affected rows

    echo $mysqli->affected_rows." row(s) affected";

    }

    else {

    // print error message

    echo "Error in query: $query. ".$mysqli->error;

    }

}

// query to get records

$query = "SELECT * FROM symbols";

// execute query

if ($result = $mysqli->query($query)) {

    // see if any rows were returned

    if ($result->num_rows > 0) {

        // yes

        // print them one after another

        echo "<table cellpadding=10 border=1>";

        while($row = $result->fetch_array()) {

            echo "<tr>";

            echo "<td>".$row[0]."</td>";

            echo "<td>".$row[1]."</td>";

            echo "<td>".$row[2]."</td>";

            echo "<td><a href=".$_SERVER['PHP_SELF']."?id=".$row[0].">Delete</a></td>";

            echo "</tr>";

        }

    }

    // free result set memory

    $result->close();

}

else {

    // print error message

    echo "Error in query: $query. ".$mysqli->error;

}

// close connection

$mysqli->close();</textarea>
<h3>5.12 Information functions</h3>
<textarea disabled>// set server access variables

$host = "localhost";

$user = "root";

$pass = "guessme";

$db = "testdb";

// open connection

$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

// get database list

$query = "SHOW DATABASES";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

    

echo "<ul>";

while ($row = mysql_fetch_array($result)) {

    echo "<li>".$row[0];

    // for each database, get table list and print

    $query2 = "SHOW TABLES FROM ".$row[0];

    $result2 = mysql_query($query2) or die ("Error in query: $query2. ".mysql_error());

    echo "<ul>";

    while ($row2 = mysql_fetch_array($result2)) {

        echo "<li>".$row2[0];

    }

    echo "</ul>";

}

echo "</ul>";

// get version and host information

echo "Client version: ".mysql_get_client_info()."<br />";

echo "Server version: ".mysql_get_server_info()."<br />";

echo "Protocol version: ".mysql_get_proto_info()."<br />";

echo "Host: ".mysql_get_host_info()."<br />";

// get server status

$status = mysql_stat();

echo $status;

// close connection

mysql_close($connection);</textarea>
<h3>5.13 error handling</h3>
<textarea disabled>

// connect

$connection = mysql_connect("localhost", "test", "test") or die("Invalid server or user");

mysql_select_db("testdb", $connection) or die("Invalid database");

// query

$query = "SELECT FROM symbols";

// result

$result = mysql_query($query,$connection);

// look for errors and print

if(!$result) {

    $error_number = mysql_errno();

    $error_msg = mysql_error();

    echo "MySQL error $error_number: $error_msg";    

}

// disconnect

mysql_close($connection);
</textarea>
<h3>5.14 MySQL connections error</h3>
<textarea disabled>

// create mysqli object

// open connection

$mysqli = new mysqli("localhost", "test", "test", "testdb");

// check for connection errors

if (mysqli_connect_errno()) {

    die("Unable to connect: ".mysqli_connect_error());

}

// query

$query = "SELECT FROM symbols";

// execute query

$result = $mysqli->query($query);

// look for errors and print

if(!$result) {

    $error_number = $mysqli->errno;

    $error_msg = $mysqli->error;

    echo "MySQL error $error_number: $error_msg";    

}

// disconnect

$mysqli->close();
</textarea>
<h3>5.15 </h3>
<pre></pre>
<h3>5.16 </h3>
<pre></pre>
<h3>5.17 </h3>
<pre></pre>
<h3>5.18 </h3>
<pre></pre>
<h3>5.19 </h3>
<pre></pre>
<h3>5.20 </h3>
<pre></pre>