<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php script tags</title>
</head>
<body>
    <?php
    $str='<p>Descripsi text yang boleh ditamplkan</p><h2>text yang tidak di tampillkan</h2>';
    $text=strip_tags($str,'<p>');

    // var_dump($text)

    echo $str;
    ?>
</body>
</html>