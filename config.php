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

# Base directory of installation.
$base = "/ISYS254/";

$config = array(
# The path to the SQLite DB.
"db_file" => "nswjlps.sqlite",

# The path to the page templates.
"templates" => "page_template/",

# The path where all uploaded images are stored.
"uploads" => "page_resources/uploads/",

# The path for storing all CSS files.
"css" => "page_resources/css/",

# The path for storing all UI images.
"images" => "page_resources/images/",

# The directory for storing all JavaScript files.
"js" => "page_resources/js/",

# Directory for storing PHP classes.
"classes" => "classes/",

# Directory for storing PHP function scripts.
"functions" => "functions/",
);

# # # # # # # # # # # # # # # #
# DO NOT EDIT BELOW THIS LINE #
# # # # # # # # # # # # # # # #
$base = $_SERVER["DOCUMENT_ROOT"] . $base;
foreach($config as $key=>$path){
	$config[$key] = $base . $path;
}

?>