<?php
# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #
#                                                             #
#                       Project Alpha                         #
#                                                             #
# This file is part of Project Alpha, a PHP rewrite of the    #
# NSWJLPS system. This project is designed to run on any      #
# standard implementation of PHP with SQLite.                 #
#                                                             #
# Do not copy or distribute any portion of this file without  #
# permission from the original authors.                       #
#                                                             #
# Copyright 2012 Benjamin Civitico, Blair Hudson, Nicholas    #
# Reynolds & Anthony Wales.                                   #
#                                                             #
# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #

# This file demonstrates how to use sqlite_db.class.php to
# return the data within an entire table.
include("../config.php");
include($config["classes"] . "sqlite_db.class.php"); # Include the class

$db->dump_all_tables(); # Dump the entire database

/*

# This code shows how to dump all the tables in the databse.
# It does the same thing as the dump_all_tables() function
# used above.

foreach($db->tables() as $table){ # Return an array with the table names
    $db->dump_table($table); # Dump the specified table
}

*/

/*

# This code shows how to perform a custom query and manipulate
# its return value. It does the same thing as the dump_table()
# function used above.

$result = $db->query("SELECT * FROM Criminal"); # Perform a custom query
echo "<h1>Criminal</h1>";
echo "<table>";
foreach($result[0] as $field=>$val){
    echo "<th>" . $field . "</th>";
}
foreach($result as $row){
    echo "<tr>";
    foreach($row as $field=>$val){
        echo "<td>" . $val . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

*/

$db->disconnect(); # Disconnect from the database
?>