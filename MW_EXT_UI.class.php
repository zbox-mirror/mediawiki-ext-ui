<?php

namespace MediaWiki\Extension\Z17DEV;

use OutputPage, Skin;

/**
 * Class MW_EXT_UI
 */
class MW_EXT_UI
{
  /**
   * Load resource function.
   *
   * @param OutputPage $out
   * @param Skin $skin
   *
   * @return bool
   */
  public static function onBeforePageDisplay(OutputPage $out, Skin $skin)
  {
    $out->addStyle('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i|Roboto:400,400i,700,700i|Fira+Mono:400,700&amp;subset=cyrillic', 'screen');
    $out->addStyle('https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css', 'screen');
    $out->addStyle('/extensions/MW_EXT_UI/modules/styles/theme.css', 'screen');
    $out->addModules(['ext.mw.theme']);

    return true;
  }
}
