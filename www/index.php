<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css" type="text/css" />
        <?php
            $boxOfficeName = 'RN';
            $headTitle = $boxOfficeName . " - Gallery Design Studio";
            $subTitle = 'Build your own image gallery to show off your events';
        ?>
        <title><?php echo $headTitle?></title>
    </head>
    <body>
        <header>
            <h1><?php echo " Gallery design studio";?></h1>
            <p class="large-text"><?php echo $subTitle; ?></p>
        </header>
        <div id="main-content">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select an image to upload to your gallery of one of your events:
            <input type="file" name="imageToUpload" id="imageToUpload"/>
            <input type="submit" name="submit" value="Upload to the gallery" id="submitBtn"/>
        </form>
        <a href="/gallery.php" id="galleryRedirectBtn">Take me to my events gallery!</a>
        </div>
    </body>
</html>

