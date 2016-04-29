<?php
// no direct access
defined( '_JEXEC' ) or die ('Restricted access');
?>

<?php
	require_once dirname(__FILE__) . '/helper.php';

	$layout = $params->get('layout', 'default');
	$mod_CopyrightInfoHelper = new ModCopyrightInfoHelper();
	$copyrightinfo = $mod_CopyrightInfoHelper->getCopyrightInfo($params);
	require JModuleHelper::getLayoutPath('mod_copyrightinfo', $layout);

?>
