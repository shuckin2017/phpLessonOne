<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гелерея</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <div class="gallery">

            <?php
            $dir="img";
            $files=scandir($dir,0);
            foreach ($files as $file){
                if($file=="."|| $file==".."){
                    continue;
                }
                echo "<div class=\"item\"><a href=\"img//$file\">
                <img class=\"itemsmall\" src=\"img/$file\"></a></div>";
            }
            ?>

    </div>
</div>
</body>

</html>