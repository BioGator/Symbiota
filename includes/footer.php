<footer>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="https://sustainable.ufl.edu" target="_blank" aria-label="Visit UF Office of Sustainability">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/BusinessAffairs-Sustainability-VECTOR-RGB.png" alt="UF Office of Sustainability" />
		</a>
		<a href="https://facilities.ufl.edu" target="_blank" aria-label="Visit UF Planning, Design, & Construction">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/BusinessAffairs-PlanningDesignConstruction-VECTOR-RGB.png" alt="UF Planning, Design, & Construction" />
		</a>
		<a href="https://biokic.asu.edu" target="_blank" title="<?= $LANG['F_BIOKIC'] ?>" aria-label="Visit BioKIC website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo-asu-biokic.png"  alt="<?= $LANG['F_BIOKIC_LOGO'] ?>" />
		</a>
	</div>
	<p>
		This project made possible through support from the UF Planning, Design & Construction and the UF Office of Sustainability 
	</p>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
