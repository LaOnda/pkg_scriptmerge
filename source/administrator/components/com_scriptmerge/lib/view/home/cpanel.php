<?php
/*
 * Joomla! Yireo Library
 *
 * @author Yireo (http://www.yireo.com/)
 * @package YireoLib
 * @copyright Copyright 2015
 * @license GNU Public License
 * @link http://www.yireo.com/
 * @version 0.6.0
 */

defined('_JEXEC') or die('Restricted access');
?>
<div id="cpanel">
<?php foreach ($this->icons as $icon) { ?>
<div style="float:left">
    <div class="icon">
        <a href="<?php echo $icon['link']; ?>" target="<?php echo $icon['target']; ?>"><?php echo $icon['icon']; ?><span><?php echo $icon['text']; ?></span></a>
    </div>
</div>
<?php } ?>
</div>
<div style="clear:both;"></div>
