<!-- apps/frontend/modules/zone/templates/indexSuccess.php -->
<?php use_stylesheet('zones.css') ?>
<h1>Zones List</h1>

<table class="zones" id="zones"">
<!--  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Code</th>
      <th>Country</th>
      <th>Created at</th>
      <th>Updated at</th> 
    </tr>
  </thead>//-->
  <tbody>
    <?php foreach ($showmobile_zones as $i => $zone): ?>
      <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
        <td>
            <a href="<?php echo url_for('zone/show?id='.$zone->getId()) ?>"><?php echo $zone->getId() ?></a>
        </td>
      <td class="name"><?php echo $zone->getName() ?></td>
      <td class="iso_code"><?php echo $zone->getCode() ?></td>
      <td class="country">
        <a href="<?php echo url_for('country/show?id='.$zone->getCountryId()) ?>">{COUNTRYNAME}</a>
      </td>
 <!--      <td><?php echo $zone->getCreatedAt() ?></td>
      <td><?php echo $zone->getUpdatedAt() ?></td> //-->
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('zone/new') ?>">New</a>
