<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/templates/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
        <title><?php echo $DEFAULT_TITLE; ?> Home</title>
        <?php
        include_once($SERVER_ROOT . '/includes/head.php');
        include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	$activateJQuery = true;
	?>
	<link href="css/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		var clientRoot = "<?php echo $CLIENT_ROOT; ?>";
	</script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<style>
		#slideshowcontainer{
			border: 2px solid black;
			border-radius:10px;
			padding:10px;
			margin-left: auto;
			margin-right: auto;
		}
	</style>
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<main id="innertext">
		<h1>Discover UF’s Campus Biodiversity!</h1>
		<div style="padding: 0px 10px;">
			<p>The BioGator portal makes it possible to discover the many species found on the University of Florida’s campus. 
				We bring together information from museum collections, community science platforms (e.g., iNaturalist, eBird), and 
				projects by UF faculty and students to document our campus biodiversity.</p>
			<p>Browse our Checklists to discover the species found in UF Campus Conservation Areas, including photographs of many species.</p>
			<p>Use Dynamic Checklists to generate a list of species known from anywhere in Florida (eBird data are currently only available for the UF campus).</p>
		</div>
		<div id="quicksearchdiv">
			<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
			<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
				<div id="quicksearchtext" ><?= "Search by Scientific Name" ?></div>
				<input id="taxa" type="text" name="taxon" />
				<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?></button>
			</form>
		</div>
	</main>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>
