<?php

defined('_JEXEC') or die;

$controller = JControllerLegacy::getInstance('helloworld');

$input = JFactory::getApplication()->input;

$controller->execute($input->getCmd('task'));

$controller->redirect();
