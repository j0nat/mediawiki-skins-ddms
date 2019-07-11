<?php

namespace ddms;

use OutputPage;
use SkinTemplate;
use Skinddms;

/**
 * Hook handlers for ddms skin.
 *
 * Hook handler method names should be in the form of:
 *	on<HookName>()
 */
class Hooks {
	/**
	 * BeforePageDisplayMobile hook handler
	 *
	 * Make ddms responsive when operating in mobile mode (useformat=mobile)
	 *
	 * @see https://www.mediawiki.org/wiki/Extension:MobileFrontend/BeforePageDisplayMobile
	 * @param OutputPage $out
	 * @param SkinTemplate $sk
	 */
	public static function onBeforePageDisplayMobile( OutputPage $out, $sk ) {
		// This makes ddms behave in responsive mode when MobileFrontend is installed
		if ( $sk instanceof Skinddms ) {
			$sk->enableResponsiveMode();
		}
	}
}
