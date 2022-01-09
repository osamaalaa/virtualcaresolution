<?php
  require_once "./db.php";
  include "src/gaurd.php"; 
$db=$conn;
// fetch query
function fetch_data(){
 global $db;
 $name = $_SESSION['username'];
 $query = "SELECT * FROM sessions WHERE doctor_name='" . $name . "'"; 
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
 echo '<table border="1" id="osama" class="table table-borderless table-hover table-nowrap table-centered m-0">
            <tr>
            <th>SessionNo.</th>
            <th>Name Of the doctor</th>
            <th>Duration</th>
            <th>Session Date</th>
            </tr>
        ';
 if(count($fetchData)>0){
      $sn=1;
      foreach($fetchData as $data){ 
  echo "<tr>
          <td>".$sn."</td>
          <td>".$data['doctor_name']."  
           <p class='mb-0 text-muted'><small>YAS Clinic Group</small></p></td>
          <td>".$data['session_time']."</td>
          <td>".$data['created_at']."</td>
   </tr>";
       
  $sn++; 
     }
}else{
     
  echo "<tr>
        <td colspan='7'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
}
?>