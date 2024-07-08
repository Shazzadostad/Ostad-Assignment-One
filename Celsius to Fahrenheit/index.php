<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius To Fahrenheit</title>
</head>

<body>
    <?php
    $celsius = 32;
    $fahrenheit = ($celsius * 9 / 5) + 32;
    printf("The temperature %.2f degrees Celsius is %.2f degrees Fahrenheit.", $celsius, $fahrenheit);
    ?>
</body>

</html>