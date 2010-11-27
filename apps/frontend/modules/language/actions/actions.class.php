<?php

/**
 * language actions.
 *
 * @package    showmobile
 * @subpackage language
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
// apps/frontend/modules/language/actions/actions.class.php
class languageActions extends sfActions
{
	public function executeChangeLanguage(sfWebRequest $request)
	{
		$form = new sfFormLanguage(
		$this->getUser(),
			array('languages' => array('en', 'fr'))
		);
		$form->process($request);
		return $this->redirect('localized_homepage');
	}
}

