<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial- scale=1.0"
    <title>Praktikum3</title>
<head>
<body>
    <div class ="fs-45"
    <?php
    include "Visibility.php";

    $visibility = new Visibility();
    $visibility->tampilkanData();

    echo "<br>";

    echo "Akses di luar kelas <br>";
    echo "public: " . $visibility->public . '<br>';
    //echo "private: " . $visibility->private . '<br>';
    //echo "protected: " . $visibility->protected . '<br>';
    ?>
    </div>

</body>
</html>

