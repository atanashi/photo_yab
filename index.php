<?php
$data['title'] = 'Index Page';
$data['body'] = 'Document body';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo $data['title']; ?>
        </title>
    </head>
    <body>
        <div>
            <?php echo $data['body']; ?>
        </div>
    </body>
</html>
