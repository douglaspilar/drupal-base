<div id="node-<?php echo $node->nid; ?>" class="node<?php echo $sticky ? ' sticky' : ''; ?><?php echo !$status ? ' node-unpublished' : '';?> clearfix clear-block">
    <div class="content clear-block">
        <?php echo $content; ?>
    </div>
</div>
