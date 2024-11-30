<link rel="stylesheet" type="text/css" href="css/styles.css">
<?php
require_once 'connections/connection.php';
$id = $_GET["id"];
$result = $conn->query("SELECT id, title, date, announce, content, image FROM `news` Where `id` = $id");

while ($row = $result->fetch()) {
    $date = gmdate('d.m.Y', strtotime($row['date']));
    $title = $row['title'];
    $announce = $row['announce'];
    $content = $row['content'];
    $image = $row['image'];
    $image_path = "resourses/images/" . $image;
    ?>
    <div class="path"> Главная / <?php echo"<div class='path_last'>" . $title . "</div>"; ?></div>
    <div class="header_news"><?php echo $title; ?></div>
    <div class="date_news"><?php echo $date; ?></div>

    <div class="content_one_new">

        <div class="content_text_one_new">
            <div>
                <div class="announce_new"><?php echo $announce; ?></div>
            </div>
            <div class="content_list_one_new">
                <div>
                    <div class="text_one_new"><?php echo $content; ?></div>
                </div>
            </div>


        </div>
        <div class="image_one_new">
            <img src='<?php echo $image_path; ?>' alt='Изображение' style="position: absolute; bottom: 0;">
        </div>
    </div>
    <div>
        <?php echo '<a href="javascript:history.back()" class="footer_news"> <div></div>НАЗАД К НОВОСТЯМ</a>'; ?>
    </div>

    <?php
}
?>


