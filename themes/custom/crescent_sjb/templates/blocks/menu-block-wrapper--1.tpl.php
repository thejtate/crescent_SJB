<?php
/**
 * @file
 * Default theme implementation to wrap menu blocks.
 *
 * Available variables:
 * - $content: The renderable array containing the menu.
 * - $classes: A string containing the CSS classes for the DIV tag. Includes:
 *   menu-block-DELTA, menu-name-NAME, parent-mlid-MLID, and menu-level-LEVEL.
 * - $classes_array: An array containing each of the CSS classes.
 *
 * The following variables are provided for contextual information.
 * - $delta: (string) The menu_block's block delta.
 * - $config: An array of the block's configuration settings. Includes
 *   menu_name, parent_mlid, title_link, admin_title, level, follow, depth,
 *   expanded, and sort.
 *
 * @see template_preprocess_menu_block_wrapper()
 */
?>
<div class="<?php print $classes; ?>">
  <div class="item-list">
    <h3><?php print t('3D Video'); ?></h3>

    <div class="media">
      <iframe allowfullscreen="" frameborder="0" height="182"
              mozallowfullscreen=""
              src="http://player.vimeo.com/video/109270949"
              webkitallowfullscreen="" width="321">
      </iframe>
    </div>
    </div>
    <?php print render($content); ?>
  </div>
