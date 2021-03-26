<?php
$name = $_REQUEST["name"];
$section = $_REQUEST["section"];
$card_type = $_REQUEST["card-type"];
$credit_card = $_REQUEST["credit-card"];
$file_name = "sucker.txt";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submission</title>
    <link rel="stylesheet" href="buyagrade.css">
</head>
<body>
    <?php if(!($name=="" || $section=="" || $credit_card=="" || $card_type=="")){ ?>
    <h2>Thanks, Sucker</h2>
    <h3>Your information has been recorded</h3>
        <dl>
            <dt>
                Name
            </dt>
            <dd>
                <?= $name ?>
            </dd>
            <dt>Section</dt>
            <dd><?= $section ?></dd>
            <dt>Credit Card</dt>
            <dd><?= $credit_card ?>(<?= $card_type ?>)</dd>
        </dl>
    <?php
        if(file_exists($file_name)){
            $lines = file_put_contents($file_name , $name.";".$section.";".$credit_card.";".$card_type."\n" , FILE_APPEND);
            $data = file_get_contents($file_name)
        ?>
        <h3>Here are all the suckers submitted here: </h3>
        <pre>
            <?= $data ?>
        </pre>
       <?php  } }
        else{  ?>
    <h1>Sorry</h1>
    <h2>You didn't fill the form completely. <a href="buyagrade.html">Try again?</a></h2>
    <?php } ?>
</body>
</html>
