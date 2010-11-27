<?php

class myUser extends sfGuardSecurityUser
{
	public function getBio() {
		return sfContext::getInstance()->getUser()->getProfile()->getBio();
	}
}