<?php
/**
 * Configures general layout
 * For detailed layout configuration, please refer to the css files.
 *
 * @package    PhpMyAdmin-theme
 * @subpackage pmaMaterial
 */

/**
 * General
 */

// Primary color - find another one at http://www.google.com/design/spec/style/color.html#color-color-palette
$GLOBALS['cfg']['PrimaryColor'] = '#673AB7';

// Color of text on primary color
$GLOBALS['cfg']['PrimaryColorText'] = '#ffffff';

/**
 * SideNav
 */

// SideNav width
$GLOBALS['cfg']['NaviWidth']                = 240;

// SideNav text color
$GLOBALS['cfg']['NaviColor']                = '#000000';

// SideNav background color
$GLOBALS['cfg']['NaviBackground']           = '#fafafa';

// foreground (text) color of the pointer in navi frame
$GLOBALS['cfg']['NaviPointerColor']         = '#000000';

// background of the pointer in navi frame
$GLOBALS['cfg']['NaviPointerBackground']    = '#9999CC';

/* Logo */

/**
 * main frame
 */
// foreground (text) color for the main frame
$GLOBALS['cfg']['MainColor']                = '#000000';

// background for the main frame
$GLOBALS['cfg']['MainBackground']           = '#F5F5F5';

// foreground (text) color of the pointer in browse mode
$GLOBALS['cfg']['BrowsePointerColor']       = '#000000';

// background of the pointer in browse mode
$GLOBALS['cfg']['BrowsePointerBackground']  = '#CCFFCC';

// foreground (text) color of the marker (visually marks row by clicking on it)
// in browse mode
$GLOBALS['cfg']['BrowseMarkerColor']        = '#000000';

// background of the marker (visually marks row by clicking on it) in browse mode
$GLOBALS['cfg']['BrowseMarkerBackground']   = '#FFCC99';

/**
 * fonts
 */
/**
 * the font family as a valid css font family value,
 * if not set the browser default will be used
 * (depending on browser, DTD and system settings)
 */
$GLOBALS['cfg']['FontFamily'] = '"Roboto", sans-serif';

/**
 * fixed width font family, used in textarea
 */
$GLOBALS['cfg']['FontFamilyFixed']      = 'monospace';

/**
 * tables
 */
// border
$GLOBALS['cfg']['Border']               = 0;
// table header and footer color
$GLOBALS['cfg']['ThBackground']         = '#D3DCE3';
// table header and footer background
$GLOBALS['cfg']['ThColor']              = '#000000';
// table data row background
$GLOBALS['cfg']['BgOne']                = '#E5E5E5';
// table data row background, alternate
$GLOBALS['cfg']['BgTwo']                = '#D5D5D5';
