<?php
include "orang.php";
include "BankCustomer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Praktikum2</h1>
    <div class="div">
        <?php
            $nasabah = new BankCustomer();
            $nasabah->setCustomerName('erika');
            $nasabah->setAddress('indonesia');
            $nasabah->setEmail('erikajs616@gmail.com');
            $nasabah->setCard('Platinum');
            $nasabah->getAcc('Wadiah');

            $nasabah->insertCard();
            $nasabah->enterPIN(12345);
    ?>
    </div>
</body>
</html>

<!-- localhost/index.php?nama= erika-->