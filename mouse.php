<?php if (!defined('PmWiki')) exit(); // -*- mode: php; time-stamp-start: "version [\"<]"; time-stamp-format: "%Y-%3b-%02d %02H:%02M"; -*- 
/**
 *
 * skin.php -- functions for mouse-skin pmwiki skin
 *
 * @author Tamara Temple <tamara@tamaratemple.com>
 * @since 2012-09-15
 * @version <2011-Oct-23 02:35>
 * @copyright (c) 2012 Tamara Temple Web Development
 * @license GPLv3
 *
 */

// Add a custom wikipage storage location for bundled pages.
global $WikiLibDirs;
$PageStorePath = dirname(__FILE__)."/wikilib.d/\$FullName";
$where = count($WikiLibDirs);
if ($where>1) $where--;
array_splice($WikiLibDirs, $where, 0,
  array(new PageStore($PageStorePath)));
