<?php

	if(!defined('CURRENT_TEMPLATE'))
 	{define('CURRENT_TEMPLATE', $manager->settings['website']['currentTemplate']);}

 	if(!defined('THIRDPARTY_PATH'))
 	{define('THIRDPARTY_PATH', '/thirdParty/');}

	if(!defined('TEMPLATE'))
 	{define('TEMPLATE', ROOT.'/app/views/templates/'.CURRENT_TEMPLATE."/");}

 	if(!defined('TEMPLATE_ASSETS'))
 	{define('TEMPLATE_ASSETS', '/app/views/templates/'.CURRENT_TEMPLATE."/assets/");}

 	if(!defined('UNDER_CONSTRUCTION_TPL'))
 	{define('UNDER_CONSTRUCTION_TPL', ROOT.'/app/views/templates/underConstruction/');}

 	if(!defined('UNDER_CONSTRUCTION_ASSETS'))
 	{define('UNDER_CONSTRUCTION_ASSETS', '/app/views/templates/underConstruction/assets/');}

 	if(!defined('USERS_IMAGES'))
 	{define('USERS_IMAGES', '/views/images/users-images/');}

 	if(!defined('DEFAULT_IMAGES'))
 	{define('DEFAULT_IMAGES', '/views/images/default-images/');}

 	if(!defined('DASHBOARD_TPL'))
 	{define('DASHBOARD_TPL', ROOT.'app/views/templates/'.CURRENT_TEMPLATE.'/'.$manager->userRoll().'/' );}

 	if(!defined('DASHBOARD_ASSETS'))
    {define('DASHBOARD_ASSETS',  '/app/views/templates/'.CURRENT_TEMPLATE.'/assets/dashboard_assets/');}

?>