<?php

require_once "./db.php";
include "src/gaurd.php"; 
$db=$conn;
// fetch query
function fetch_data(){
 global $db;
  $query="SELECT  SUM(total_cost) total FROM sessions";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  } 
}
$fetchData= fetch_data();
show_data($fetchData);

function show_data($fetchData){

 echo ".$fetchData[total].";

}

?>