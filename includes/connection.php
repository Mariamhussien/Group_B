 <?php 
  
    $server="localhost"; 
    $user="customer"; 
    $pass="customer"; 
    $db="shopping"; 
      
    // connect to mysql 
      
    mysql_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql."); 
      
    // select the db 
      
    mysql_select_db($db) or die("Sorry, can't select the database."); 
  
?>