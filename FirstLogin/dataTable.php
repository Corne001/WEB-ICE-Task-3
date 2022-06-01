
<?php

include("db_connect.php");
$db = $conn;
    $tableName="users";
    $columns= ['Name','email','mobile','password'];
    $fetchData = fetch_data($db, $tableName, $columns);

    function fetch_data($db, $tableName, $columns)
    {
        if(empty($db))
        {
         $msg= "Database connection error";
        }
        //is_array checked whether a variable in in an array
         elseif (empty($columns) || !is_array($columns)) 
         {
            $msg="columns Name must be defined in an indexed array";
         }
         elseif(empty($tableName))
         {
            $msg= "Table Name is empty";
         }
       else
       {
          //The implode() is a builtin function in PHP and is used to join the elements of an array.
        $columnName = implode(", ", $columns);
        $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY Name DESC";
        $result = $db -> query($query);
       }
       if($result== true)
       { 
         if ($result->num_rows > 0) 
         {
            $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
            $msg= $row;
            } 
         else 
         {
           $msg= "No Data Found"; 
         }
       }
       else
       {
          //Return the last error description for the most recent function call
         $msg= mysqli_error($db);
       }
       
       return $msg;
    }


?>




