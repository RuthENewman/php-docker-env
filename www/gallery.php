<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css" type="text/css" />
        <?php
            $boxOfficeName = 'RN';
            $headTitle = $boxOfficeName . " Events Gallery";
        ?>
        <title><?php echo $headTitle?></title>
    </head>
    <body>
        <header>
            <h1><?php echo $boxOfficeName . " Events Gallery";?></h1>
            <p class="large-text"><?php echo $subTitle; ?></p>
        </header>
        <div id="gallery">
            <?php $images = [
                [
                    "id" => 1,
                    "name" => "Musical instruments",
                    "url" => "https://www.conseildelamusique.be/image/1467/og/la-fete-de-la-musique.jpg",
                ],
                [
                    "id" => 2,
                    "name" => "Wine and cheese",
                    "url" => "https://tourfantastique.com/wp-content/uploads/2014/10/Tour-Fantastique-Tuscany-Wine-and-cheese-Tour.jpg",
                ],
                [
                    "id" => 3,
                    "name" => "Board games",
                    "url" => "https://www.hhsrampages.com/wp-content/uploads/2017/03/game-night.png",
                ],
                ];

                foreach($images as $image) {
                    ?><img src=<?php echo $image["url"];?> alt=<?php echo $image["name"];?>/>
                <?php }
            ?>
            <?php $imagePath = getcwd(); ?>
                <!-- <img src=<?php echo $imagePath . "/uploads/three-sisters.jpeg"?> /> -->
        </div>
        <a href="/index.php">Back to Design Studio</a>
    </body>
</html>