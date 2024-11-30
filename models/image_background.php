<link rel="stylesheet" type="text/css" href="css/styles.css">
<?php
include 'connections/connection.php';
$result = $conn->query('SELECT title, announce, image FROM `news` ORDER BY date DESC LIMIT 1');
$result->setFetchMode(PDO::FETCH_ASSOC);
$row = $result->fetch();
$title = $row['title'];
$announce = $row['announce'];
$image = $row['image'];
if (isset($image)) {
    $image_path = "resourses/images/" . $image;
    ?>
    <div class="image_first" style="background-image: url('<?php echo $image_path; ?>')"> 
        <div class ="first_new">
            <div class="header_first_new"><?php echo $title; ?></div>
            <div class="announce_first_new"><?php echo $announce; ?></div>
        </div>
    </div>
<?php }
?>


