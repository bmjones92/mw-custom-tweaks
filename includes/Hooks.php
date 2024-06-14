<?php

namespace MediaWiki\Extension\CustomTweaks;

use OutputPage;
use Skin;

class Hooks {

    /**
     * @param $out OutputPage
     * @param $skin Skin
     * @return void
     */
    public static function onBeforePageDisplay($out, $skin): void
    {
        // Apply the theme cookie to the page body if it is present.
        $theme = $skin->getContext()->getRequest()->getCookie('theme', '');
        if ($theme) {
            $out->addBodyClasses('theme-' . $theme);
        }
    }

}