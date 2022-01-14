<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_adstxt
 */

defined('_JEXEC') or die;

class AdstxtController extends JControllerLegacy
{
    public function display($cachable = true, $urlparams = array())
    {
        JFactory::getDocument()->setMimeEncoding('text/plain');
        $this->input->set('view', 'plain');

        return parent::display($cachable);
    }
}
