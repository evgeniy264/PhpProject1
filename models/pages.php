<link rel="stylesheet" type="text/css" href="css/styles.css">
<?php
include 'connections/connection.php';
$result = $conn->query("SELECT COUNT(id) as count FROM news");
$result->setFetchMode(PDO::FETCH_ASSOC);
$row = $result->fetch();
$count_news = $row['count'];
$count_pages = ceil($count_news / 4);
?>

<?php
if (isset($page))
    $page_active = $page;
else
    $page_active = 1;
for ($page = 1; $page <= $count_pages; $page++) {
    if ($page == $page_active)
        $class_a = 'menu_button_active';
    else
        $class_a = 'menu_button';
    ?>
    <div class="footer_pages"><?php echo "<a class='$class_a' href=index.php?page=$page>" . $page . "</a>"; ?></div>
    <?php
}
?>  
<?php
if ($count_pages > 1 && $page_active != $count_pages) {
    ?>
    <div class="footer_pages"><?php echo "<a class='next_button_active' href=index.php?page=" . $page_active + 1 . ">
<div></div>
</a>"; ?></div> 
    <?php
}
?>



