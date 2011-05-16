<?php
    $node = $result['node'];
    $link = 'node/' . $node->nid;
    
    switch ($node->type) :
	case '':
        $link = 'node/';
	break;	
    endswitch;
?>

<dt class="title">
    <h3><?php echo l($title, $link); ?></h3>
</dt>
<dd>
    <p class="search-snippet">
        <?php if ($snippet) : ?>
            <small><?php echo $snippet; ?></small><br />
        <?php endif; ?>
        <?php $url = url($link, aa('absolute', TRUE)); ?>
        <?php echo l($url, $url); ?>
    </p>
</dd>
