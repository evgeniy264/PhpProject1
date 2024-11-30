<link rel="stylesheet" type="text/css" href="css/styles.css">
<?php
include 'connections/connection.php';
if (isset($page))
    $offset = ($page - 1) * 4;
else
    $offset = 0;
$result = $conn->query('SELECT id, date, title, announce FROM `news` ORDER BY date DESC LIMIT ' . $offset . ', 4');
while ($row = $result->fetch()) {
    $date = gmdate('d.m.Y', strtotime($row['date']));
    $id = $row['id'];
    $title = $row['title'];
    $announce = $row['announce'];
    ?>

    <div class="content_item" onClick="window.location.href = '<?php echo'index.php?id=' . $id . ''; ?>'">
        <div>
            <div class='date_news'><?php echo $date; ?></div>
        </div>
        <div>
            <div class='title'><?php echo $title; ?></div>
        </div>
        <div>
            <div class='announce_news'><?php echo $announce; ?></div>
        </div>
        <?php echo '<a href= index.php?id=' . $id . ' class="button_details">ПОДРОБНЕЕ<div></div></a>'; ?>      
    </div>

    <?php
}
?>




