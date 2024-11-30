<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Новости</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <div class="container_news">
            <div class="header">
                <div> 
                    <img class="logo" src="resourses/logo/Логотип.png" alt="Логотип компании">
                </div>    
                <div class="logo_string">ГАЛАКТИЧЕСКИЙ ВЕСТНИК</div> 
            </div>

            <div class="image_and_title">
                <?php include 'models/image_background.php'; ?>
            </div>
            <div class="content">
                <div class ="title_news">Новости</div>

                <div class="content_list">
                    <?php include 'models/list_news.php'; ?>
                </div>
                <div class="footer_menu">
                    <?php include 'models/pages.php'; ?>
                </div>
            </div>

            <div class="footer"> &copy; 2023&mdash;2412 &laquo;Галактический вестник&raquo;</div>
        </div>
    </body>
</html>
