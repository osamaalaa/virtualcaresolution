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
<<<<<<< HEAD
    echo '<div class="pending-text">You have ' . mysqli_num_rows($result) . ' pending tasks.</div>';
} else {
    echo "<li><span class='text'>No Record Found.</span></li>";
}
=======
    }
    
>>>>>>> 7ceea9416db0a38e883fed17c36cbda366d30c5c

?>