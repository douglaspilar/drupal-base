<div id="head">
    <div id="header-search">
        <div class="container_12 clearfix">
	        <div class="header-search-atendimento left"><?php echo $header; ?></div>
	        <div class="header-search-searchbox right clearfix grid_3 alpha omega"><?php echo $search_box ?></div>
    	</div>
    </div>
    <div id="header-inner">
        <div id="header-content">
            <div class="container_12 clearfix">
                <h1 id="logomarca" class="grid_3 omega alpha">
                    <?php if (drupal_is_front_page()) : ?>
                        <div>VerdeCard</div>
                    <?php else : ?>
                        <a href="<?php echo $front_page; ?>" title="<?php echo 'Home'; ?>">VerdeCard</a>
                    <?php endif; ?>
                </h1>
                <div id="header-menu" class="grid_10 right clearfix omega">
                    <div class="header-menu-botoes left"><?php echo theme('links', $primary_links, $attributes = array('class' => 'links primary-links')); ?></div>
                    <div class="header-menu-btcliente left"><a href="#">conta cliente</a></div>
                    <div class="header-menu-btlojista left"><a href="#">conta lojista</a></div>
                </div>
            </div>
        </div>
    </div>
</div>