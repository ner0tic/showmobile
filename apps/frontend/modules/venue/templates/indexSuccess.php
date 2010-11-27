<!-- apps/frontend/modules/venue/templates/indexSuccess.php -->
<?php use_stylesheet('venues.css') ?>
<h1>venues List</h1>

<table class="venues" id="venues"">
  <tbody>
    <?php foreach ($showmobile_venues as $i => $venue): ?>
      <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
        <td>
<!--            <a href="<?php echo url_for('venue/venue?id='.$venue->getId()) ?>"><?php echo $venue->getId() ?></a>//-->
        </td>
      <td class="name"><?php echo $venue->getName()?></td>
      <td class="address"><?php echo $venue->getAddress()->getAddressLong() ?></td>
      <td class="image"><img src="/images/venues/<?php echo (is_null($venue->getImg())? 'default.png':'')?>" alt="<?php echo $venue->getName()?>" /></td>
      <td class="map"><a href="<?php url_for('venue/map?id='.$venue->getId())?>">view map</a></td>
 <!--      <td><?php echo $venue->getCreatedAt() ?></td>
      <td><?php echo $venue->getUpdatedAt() ?></td> //-->
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('venue/new') ?>">New</a>
