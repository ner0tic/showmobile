<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $showmobile_vehicle_color->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $showmobile_vehicle_color->getName() ?></td>
    </tr>
    <tr>
      <th>Hex:</th>
      <td><?php echo $showmobile_vehicle_color->getHex() ?></td>
    </tr>
    <tr>
      <th>Rgb:</th>
      <td><?php echo $showmobile_vehicle_color->getRgb() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $showmobile_vehicle_color->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $showmobile_vehicle_color->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('vehicleColor/edit?id='.$showmobile_vehicle_color->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('vehicleColor/index') ?>">List</a>
