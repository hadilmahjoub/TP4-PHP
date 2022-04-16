<?php
$po = isset($_POST["rate"]);
$cook = isset($_COOKIE["rate"]);
?>

<html>
<link rel="stylesheet" href="style.css">
<div class="container">
<!--Container-->

    <?php
    if ($po) {
        if (!$cook) {
            setcookie('rate', $_POST["rate"], time() + 120);
    ?>
            <div class="accept"><?= "Evaluation bien reçu!" ?></div>
        <?php
        } else {
        ?>
            <div class="reject">
                <?= "Désolé vous avez déjà évalué! C'est le contenu de votre réponse: <b>" . $_COOKIE["rate"] . "</b>" ?>
                <!-- <?php print_r($_COOKIE) ?> -->
            </div>
            
</div>
<!--Container-->

</html>
<?php
        } // End If Else (interne)
    } // End If (externe)
?>