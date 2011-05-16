<div id="block-<?php echo $block->bid; ?>" class="block block-<?php echo $block->module ?> <?php echo block_class($block); ?> clearfix">
    <?php if ($block->subject): ?>
        <span class="block-subject"><?php echo $block->subject; ?></span>
    <?php endif; ?>
    <div class="content">
        <?php echo $block->content; ?>
    </div>
</div>

