<?php
include('classes/template.php');
$template = new template();
?>

<!DOCTYPE html>
<html>
<head>
    <?php template::getMeta(); ?>
    <title><?php $template->showTitle(); ?></title>
    <?php template::getLibs(); ?>
</head>
<body>
<?php template::getMenu(); ?>

    <ul class="messages">
        <li class="messageList"><a href="">Saņemtās</a></li>
        <li class="messageList"><a href="">Nosūtītās</a></li>
        <li class="messageList"><a href="">Nosūtīt</a></li>
    </ul>

<ul class="messages">
    <li class="bn"><a href="" style="color: blanchedalmond" name="name">Vārds &nbsp Uzvārds</a></li>
    <li class="bn1"><a href="" style="color: blanchedalmond" name="sendMessage">Atbildēt</a></li>
    <li class="bn1"><a href="" style="color: blanchedalmond" name="deleteMessage">Dzēst</a></li>
</ul>


<?php template::getJsLibs(); ?>
</body>
</html>