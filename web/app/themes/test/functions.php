<?php

global $deviceType;
$MobileDetect = new \Detection\MobileDetect;
$deviceType = ($MobileDetect->isMobile() ? ($MobileDetect->isTablet() ? 'tablet' : 'phone') : 'computer');

require_once(get_template_directory() . '/inc/scripts.php');

require_once(get_template_directory() . '/inc/carbon_fields.php');


require_once(get_template_directory() . '/inc/svg.php');