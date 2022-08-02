@extends('layout.app')

@section('content')
Demo Page
<?php
    $dbdat = parse_url(getenv("DATABASE_URL"));

    $user = $dbdat["user"];
    $password = $dbdat["pass"];
    $host = $dbdat["host"];
    $port = $dbdat["port"];
    $dbname = ltrim($dbdat["path"], "/");
    $db = pg_connect("host=$host dbname=$dbname user=$user password=$password")
    or die ("Could not connect to server\n"); 


    
    /*$test = $_POST['name'];
    $msg = $_POST['msg'];

    
    if(($test == "IlovCanada213" && $msg == "hello how r u") || $test == "" || $msg == "") print("No Input");
    else if($test == "REFRESH" || $test == "MAKE") 
    {
        $sql = "DROP TABLE test_table";

        if(pg_query($db, $sql)) echo "<br> Deleted Table successfully";
        else echo "Cannot execute query: $sql\n";

        $sql = "CREATE TABLE test_table (username text, msg text);";

        if(pg_query($db, $sql)) echo "Table created successfully";

    }
    else
    {
        print("Input!");
        $sql = "INSERT INTO test_table VALUES ('$test', '$msg')";

        if(pg_query($db, $sql) == false) echo "Cannot execute query: $sql\n";
    }
*/
    $query = "SELECT * FROM message"; 

    $rs = pg_query($db, $query);

    if($rs)
    {
        while ($row = pg_fetch_row($rs)) {
        print("<div> User: $row[0] <br><br> Says: $row[1] <br></div>\n");
        }
    }
    else echo "Cannot execute query: $query\n The database may not exist. Enter the message 'MAKE' to recreate it!";
    
    pg_close($db); 
    
    /*
    
<br><br>
<body>
    
    
</body>
    <form method="POST" action="/demo">
        @csrf
        Username: 
        <input type="text" name="name" value="IlovCanada213" required>
        Message:
        <input type="text" name="msg" value="hello how r u" required>

        <input type="submit" value="Submit Message">
    </form>
    */
?>


@endsection