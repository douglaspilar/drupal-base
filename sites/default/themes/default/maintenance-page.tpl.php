<?php $path = base_path() . drupal_get_path('theme','default'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
    <?php echo $head; ?>
    <title> | estamos em manutenção</title>
    <?php echo $styles; ?>
</head>
<body class="<?php print $body_classes; ?>">
    <div id="wrapper-header"></div>
    <div id="wrapper-content">
    	<div id="logo-offline"><a href="<?php echo $path; ?>"></a></div>
    	<div id="manutencao">
    		<h2>Site em manuten&ccedil;&atilde;o</h2>
    		<h4>Por favor, tente novamente mais tarde.<br />Agradecemos sua compreensão.</h4>
        </div>
    </div>
    <div id="wrapper-footer">
        <div id="footer" class="container_12 clearfix footet-offline-verdcard">            
        </div>
    </div>
    <div style="display:none">
        <?php echo $content; ?>
        <?php print_r($_SERVER); ?>
    </div>
</body>
</html>
