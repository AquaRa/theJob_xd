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

<div class="profilePhoto">
    <a href="" data-lightbox="gallery"><img src="" alt="profila bilde" /></a>
    <p class="desc" name="">Vārds Uzvārds</p>
</div>

<div class="container">

<div class="row">
  <div class="col-md-3 gallery">
    <a href="">
        <img src="img/ram.jpg" alt="profils">
    </a>
    <div class="description" name="">Vārds Uzvārds</div>
</div>

<div class="col-md-3 gallery">
    <a href="">
        <img src="" alt="profils">
    </a>
    <div class="description" name="">Vārds Uzvārds</div>
</div>


<div class="col-md-3 gallery">
    <a href="">
        <img src="" alt="profils">
    </a>
    <div class="description" name="">Vārds Uzvārds</div>
</div>

<div class="col-md-3 gallery">
    <a href="">
        <img src="" alt="profils">
    </a>
    <div class="description" name="">Vārds Uzvārds</div>
  </div>
</div>

    <div class="row">
        <div class="col-md-3 gallery">
            <a href="">
                <img src="" alt="profils">
            </a>
            <div class="description" name="">Vārds Uzvārds</div>
        </div>

        <div class="col-md-3 gallery">
            <a href="">
                <img src="" alt="profils">
            </a>
            <div class="description" name="">Vārds Uzvārds</div>
        </div>


        <div class="col-md-3 gallery">
            <a href="">
                <img src="" alt="profils">
            </a>
            <div class="description" name="">Vārds Uzvārds</div>
        </div>

        <div class="col-md-3 gallery">
            <a href="">
                <img src="" alt="profils">
            </a>
            <div class="description" name="">Vārds Uzvārds</div>
        </div>
    </div>

    <div class="parSevi">
        <h3>Par sevi:</h3>
        <p name="parSevi">bla bla bla </p>
    </div>


</div>



<?php template::getJsLibs(); ?>
</body>
</html>


