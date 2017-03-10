<?php
$app = JFactory::getApplication();
$message = JText::sprintf('Page not found.');
$app->redirect(JURI::base(), $message, 'error');
exit();