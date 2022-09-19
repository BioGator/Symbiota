<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
include_once('content/lang/misc/aboutproject.'.$LANG_TAG.'.php');
?>
<html>
	<head>
		<title>The BioGator Team</title>
		<?php
		$activateJQuery = false;
		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<body>
		<?php
		$displayLeftMenu = false;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath">
			<a href="../index.php"><?php echo (isset($LANG['HOME'])?$LANG['HOME']:'Home'); ?></a> &gt;&gt;
			<b><?php echo (isset($LANG['CONTACTS'])?$LANG['CONTACTS']:'Contacts'); ?></b>
		</div>
		<!-- This is inner text! -->
		<div id="innertext" style="margin:10px 20px">
			<h1><?php echo (isset($LANG['CONTACTS']) ? $LANG['CONTACTS'] : 'The BioGator Team'); ?></h1>

			<p>The following faculty lead the BioGator project at the University of Florida:</p>
			<ul>
				<li>Dr. David C. Blackburn, Lead PI for BioGator project, Curator of Amphibians & Reptiles, Florida Museum of Natural History</li>
				<li>Dr. Akito Y. Kawahara, Curator of Lepidoptera, McGuire Center for Lepidoptera & Biodiversity, Florida Museum of Natural History</li>
				<li>Dr. Andrea Lucky, Associate Professor, Department of Entomology and Nematology, Institute of Food and Agricultural Sciences</li>
				<li>Dr. Lucas C. Majure, Curator and Keeper of the University of Florida Herbarium, Florida Museum of Natural History</li>
				<li>Dr. Matthew E. Smith, Associate Professor and Curator of the University of Florida Fungal Herbarium, Department of Plant Pathology, Institute of Food and Agricultural Sciences</li>
				<li>Dr. Pamela S. Soltis, Curator and Distinguished Professor, Florida Museum of Natural History; Director, UF Biodiversity Institute</li>
				<li>Dr. Douglas E. Soltis, Curator and Distinguished Professor, Florida Museum of Natural History</li>
			</ul>
			<p>Graduate Research Assistants:</p>
			<ul>
				<li>Yuley Encarnación Piñeyro, Graduate Research Assistant, Department of Biology, College of Liberal Arts & Sciences, University of Florida</li>
				<li>Dr. Greg Jongsma, Graduate Research Assistant, Department of Biology, College of Liberal Arts & Sciences, University of Florida (now Assistant Curator of Zoology, New Brunswick Museum)</li>
				<li>José Esteban Jiménez, PhD student, Department of Biology, College of Liberal Arts & Sciences, University of Florida</li>
			</ul>	
			<p>Undergraduate Research Assistants:</p>
			<ul>
				<li>Colin Connealy, Undergraduate Research Assistant, Florida Museum of Natural History</li>
				<li>Natalie Heaton, Undergraduate Research Assistant, Florida Museum of Natural History</li>
				<li>Ella O’Brien, Undergraduate Research Assistant, Department of Entomology and Nematology, Institute of Food and Agricultural Sciences</li>
				<li>Cecil Page, Undergraduate Research Assistant, McGuire Center for Lepidoptera & Biodiversity, Florida Museum of Natural History</li>
			</ul>
			<p>BioGator Logo designed by Kasey Khanh Pham, PhD student, Department of Biology, College of Liberal Arts & Sciences, University of Florida</p>
		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>
