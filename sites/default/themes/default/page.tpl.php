<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
    <?php include('inc/head.inc.php'); ?>
</head>
<body class="<?php echo $body_classes; ?>">
    <?php include('inc/header.inc.php'); ?>
    <div id="wrapper-contet">
        <h2><?php echo $title; ?></h2>
    </div>   
    <?php include('inc/footer.inc.php'); ?>
    <?php echo $scripts; ?>
    <?php echo $closure; ?>
</body>
</html>
