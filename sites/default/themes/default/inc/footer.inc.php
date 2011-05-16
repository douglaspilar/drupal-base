<div id="footer">
    <div class="footer-logo"><a href="<?php print $front_page; ?>" title="<?php echo 'Home'; ?>">VerdeCard</a></div>
    <div class="footer-infos">
	    <div class="footer-menu">
	        <ul class="ul footer-menu-nossossites">
	            <li> 
	                <a href="javascript:;">Nossos sites</a>
	                <div class="footer-menu-nossossites-sites"><?php echo theme('links', menu_navigation_links('menu-nossos-sites'), array('class' => 'links nossos-sites-links ul')); ?></div>
	            </li>
	        </ul>        
	        <?php echo theme('links', $secondary_links, array('class' => 'links secondary-links')); ?>
	    </div>
	    <div id="copyright">Copyright 2011 &copy; Verdecard. Todos os direitos reservaos.</div>
	    <div id="mmda"><a href="http://www.mmda.com.br" target="_blank">mmda.</a></div>
	</div>
	<br clear="left" />
</div>