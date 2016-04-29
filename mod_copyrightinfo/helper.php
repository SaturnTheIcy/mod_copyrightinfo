<?php
// no direct access
defined( '_JEXEC' ) or die ('Restricted access');
?>
<?php
	/**
	 * Helper class for copyright info
	 */
	class ModCopyrightInfoHelper
	{
		/* Returns the text of copyright*/
		public function getCopyrightInfo($params)
		{
			// Get company name
			if($params->get('useSiteName') == 0)
			{
				$company_name = $params->get('companyName');
			}
			else
			{
				$app = JFactory::getApplication();
				$company_name =  $app->get('sitename');
			}

			// Get register year
			$fromDate = $params->get('registerYear');

			// Get date from joomla if current year is selected
			if($params->get('useCurrentYear') == 1)
			{
				$app = new JDate('now');
				$year = $app->format('Y');
				if(strcmp((string)$fromDate,(string)$year))
					$fromDate = " - ". $year;
			}
			return '<div id="copywrite">Copyright &copy; ' . $fromDate . ' ' . $company_name . '. All Rights Reserved </div>';
		}
	}
 ?>
