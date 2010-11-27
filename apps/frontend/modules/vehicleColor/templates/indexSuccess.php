<h1>Showmobile vehicle colors List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Hex</th>
      <th>Rgb</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($showmobile_vehicle_colors as $showmobile_vehicle_color): ?>
    <tr>
      <td><a href="<?php echo url_for('vehicleColor/show?id='.$showmobile_vehicle_color->getId()) ?>"><?php echo $showmobile_vehicle_color->getId() ?></a></td>
      <td><?php echo $showmobile_vehicle_color->getName() ?></td>
      <td><?php echo $showmobile_vehicle_color->getHex() ?></td>
      <td><?php echo $showmobile_vehicle_color->getRgb() ?></td>
      <td><?php echo $showmobile_vehicle_color->getCreatedAt() ?></td>
      <td><?php echo $showmobile_vehicle_color->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('vehicleColor/new') ?>">New</a>
