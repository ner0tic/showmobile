<!-- apps/frontend/modules/country/templates/indexSuccess.php -->
<?php use_stylesheet('countrys.css') ?>
<h1>Countries List</h1>

<table class="countrys">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Iso code 2</th>
<!--      <th>Iso code 3</th> //-->
      <th>Address format</th>
<!--      <th>Created at</th>
      <th>Updated at</th> //-->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($showmobile_countrys as $i => $showmobile_country): ?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
      <td><a href="<?php echo url_for('country/show?id='.$showmobile_country->getId()) ?>"><?php echo $showmobile_country->getId() ?></a></td>
      <td class="name""><?php echo $showmobile_country->getName() ?></td>
      <td clas="iso_code""><?php echo $showmobile_country->getIsoCode2() ?></td>
<!--      <td ><?php echo $showmobile_country->getIsoCode3() ?></td> //-->
      <td class="address_format"><?php echo $showmobile_country->getAddressFormatId() ?></td>
<!--      <td><?php echo $showmobile_country->getCreatedAt() ?></td>
      <td><?php echo $showmobile_country->getUpdatedAt() ?></td> //-->
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('country/new') ?>">New</a>
