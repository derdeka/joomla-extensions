<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_adstxt
 */

defined('_JEXEC') or die;

$controller = JControllerLegacy::getInstance('adstxt');
$controller->execute(JFactory::getApplication()->input->get('task'));
