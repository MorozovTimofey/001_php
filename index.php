<?php 
        $name = 'Tima';
        $count = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Hello world!'?></title>
</head>
<body>
    <?php
        $h2 = "<h1 style=\"color:red\">{$count}й</h1>";
        echo $h2;
    ?>
    <script>
        let a = '<?= 'Hello world!'?>';
    </script>
</body>
</html>