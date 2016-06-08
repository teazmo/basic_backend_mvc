<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 13.05.16
 * Time: 22:54
 */

defined('_JEXEC') or die();

class HelloWorldViewHelloWorld extends JViewLegacy
{
    public function display($tpl = null)
    {
        $this->items = $this->get('Items');

        parent::display($tpl);
    }
}
