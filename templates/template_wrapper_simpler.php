<!DOCTYPE html>
<html lang="en">

<head>

    <?php $wrapped_content = $_get_wrapped_content(); ?>
    <title> <?= $GLOBALS['_title_tag_content'] ?> </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

</head>

<body>

    <?= $wrapped_content ?>

    <!-- Footer -->
    <!-- this reused across pages -->
    <hr>
    <button onclick="javascript:history.back()">Back</button>
</body>

</html>