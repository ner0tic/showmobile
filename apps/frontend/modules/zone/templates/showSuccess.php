<!-- apps/frontend/modules/zone/templates/showSuccess.php -->
<?php use_stylesheet('zone.css') ?>
<?php use_helper('Text') ?>
 
<div id="zone">
  <h1><?php echo $zone->getName() ?></h1>
  <h2><?php echo $zone->getCode() ?></h2>
 
  <div class="description">
    {DESCRIPTION}
  </div>

  <div class="meta">
    <small>posted on <?php echo $zone->getDateTimeObject('created_at')->format('m/d/Y') ?></small>
  </div>
 
  <div style="padding: 20px 0">
    <a href="<?php echo url_for('zone/edit?id='.$zone->getId()) ?>">
      Edit
    </a>
  </div>
</div>
