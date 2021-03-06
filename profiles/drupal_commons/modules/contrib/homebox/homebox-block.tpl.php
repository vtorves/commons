<?php

/**
 * @file
 * homebox-block.tpl.php
 * Default theme implementation each homebox block.
 */
?>
<div id="homebox-block-<?php print $block->key; ?>" class="<?php print $block->homebox_classes ?> clear-block block block-<?php print $block->module ?>">
  <div class="homebox-portlet-inner">
    <h3 class="portlet-header">
      <?php if ($block->closable): ?>
        <a class="portlet-icon portlet-close"></a>
      <?php endif; ?>
      <a class="portlet-icon portlet-maximize"></a>
      <a class="portlet-icon portlet-minus"></a>
      <?php if ($page->settings['color'] || isset($block->edit_form)): ?>
        <a class="portlet-icon portlet-settings"></a>
      <?php endif; ?>
      <span class="portlet-title"><?php print $block->subject ?></span>
    </h3>
    <div class="portlet-config">
      <?php if ($page->settings['color']): ?>
        <div class="clear-block"><div class="homebox-colors">
          <span class="homebox-color-message"><?php print t('Select a color') . ':'; ?></span>
          <?php for ($i=0; $i < HOMEBOX_NUMBER_OF_COLOURS; $i++): ?>
            <span class="homebox-color-selector" style="background-color: <?php print $page->settings['colors'][$i] ?>;">&nbsp;</span>
          <?php endfor ?>
        </div></div>
      <?php endif; ?>
      <?php if (isset($block->edit_form)): print $block->edit_form; endif; ?>
    </div>
    <div class="portlet-content content"><?php print $block->content; ?></div>
  </div>
</div>
