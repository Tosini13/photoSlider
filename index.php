<?php
require_once 'connect_database.php';
$result = $db->query("select * from photos");
$qtt = $result->rowCount();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css_photos_slider.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                photo_slider(<?php echo $qtt ?>);
            });
        </script>
    </head>
    <body>
        <a href="#slideleft"><div class="slide_arrow_left" onclick="photo_slide_left()"><</div></a>
        <div id="slider">
            <div id="slides">
                <?php
                $result = $db->query("select * from photos");
                if ($result->rowCount()) {
                    while ($data = $result->fetch()) {
                        $url = 'photos/screenshots/' . $data['photo'];
                        ?>
                        <img class="slide" src="<?php echo $url ?>" alt='<?php echo $url ?>' height="auto">
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <a href="#slideright"><div class="slide_arrow_right" onclick="photo_slide_right()">></div></a>
        <script src='js_photos_slider.js' type="text/javascript"></script>
    </body>
</html>
