<?php
include "./config.php";
$Select = "SELECT * FROM story";
$result = mysqli_query($connection, $Select);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {


?>

<div>
    <img style="object-fit: cover;" class="mx-3 rounded-circle" width="55px" height="55px"
        src="./backendimage/<?php echo $row['Image'] ?>" alt="">
</div>

<?php
    }
}
?>