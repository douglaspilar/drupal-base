<?php $messages = drupal_get_messages(); ?>
<div id="block-<?php echo $block->delta; ?>" class="block block-<?php echo $block->module . ' ' . block_class($block) . ' '; echo $_GET['o'] ? 'webform-open' : ''; ?> clearfix">        
	<div id="wrapper-form-messages">
		<?php /*if ($messages['error']) : ?>
        	<div class="messages error">Lamentamos, mas sua mensagem não pode ser enviada.<br />Tente novamente mais tarde.</div>
        <?php endif; */?>

        <?php if ($messages['status']) : ?>
        	<div class="messages status"><?php echo $messages['status'][0] ?></div>
        <?php endif; ?>
        
		<div id="message-warning" class="messages"></div>
    </div>
    <div class="content">
        <?php echo $block->content; ?>
    </div>
</div>
