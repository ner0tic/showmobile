<!-- apps/frontend/modules/country/templates/showSuccess.php -->
<?php use_stylesheet('country.css') ?>
<?php use_helper('Text') ?>
 
<div id="country">
  <h1><?php echo $country->getName() ?></h1>
  <h2>{CURRENCY}</h2>
  <h3>
    {LANGUAGE}
    <small> - {TRANSLATE_LINK}</small>
  </h3>
 
  <?php if ($country->getFlag()): ?>
    <div class="flag">
        <img src="/uploads/countrys/<?php echo $job->getLogo() ?>"
          alt="<?php echo $country->getName() ?> flag" />
    </div>
  <?php endif ?>
 
  <div class="description">
    {DESCRIPTION}
  </div>
 
   <div class="meta">
    <small>posted on <?php echo $country->getDateTimeObject('created_at')->format('m/d/Y') ?></small>
  </div>
 
  <div style="padding: 20px 0">
    <a href="<?php echo url_for('country/edit?id='.$country->getId()) ?>">
      Edit
    </a>
  </div>
</div>
