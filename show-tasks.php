<?php 

include 'db.php';
include "src/gaurd.php"; 
$username = $_SESSION['username'];
$sql = "SELECT * FROM tasks where doctor_name  = '$username' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

?>

<li>
    <span class="text"><?php echo $row['title']; ?></span>
    <i id="removeBtn" class="icon fa fa-trash" data-id="<?php echo $row['id']; ?>"></i>
</li>

<?php
    }
    echo '<div class="pending-text">You have ' . mysqli_num_rows($result) . ' pending Request.</div>';
} else {
    echo "<li><span class='text'>No Requests Found.</span></li>";
}
    
    

?>