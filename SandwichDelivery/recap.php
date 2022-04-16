<?php
    // foreach ($_POST as $key => $value) {
    //     $value = strip_tags($_POST[$key]);
    // }

    $name = htmlspecialchars($_POST["name"]);
    // $lastname = strip_tags($_POST['lastname']);
    // $sandnbr = strip_tags($_POST['sandnbr']);
    // $sandtype = strip_tags($_POST['sandtype']);

?>

<html>
<link rel="stylesheet" href="style.css" />
<div id="card">
    <header>
        <h1>Here is a recap for your order</h1>
    </header>

    <?php
    foreach ($_POST as $key => $value) {
        if ($key=="CIN") {
            continue;
        }
    ?>
        <p><b><?= $key ?></b> <?= ": ". $value ?></p>

    <?php } ?>

    <footer>
        <?php 
        global $price;
        $price = 4*$_POST["sandnbr"];
            if ($_POST["sandnbr"] > 10) {
                $price -= $price * 0.1; 
            }
        ?>
        <h2>price to pay: <?= $price ?> dt</h2>
    </footer>

</div>

</html>