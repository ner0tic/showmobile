<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $showmobile_vehicle->getId() ?></td>
    </tr>
    <tr>
      <th>Year:</th>
      <td><?php echo $showmobile_vehicle->getYear() ?></td>
    </tr>
    <tr>
      <th>Make:</th>
      <td><?php echo $showmobile_vehicle->getMake() ?></td>
    </tr>
    <tr>
      <th>Model:</th>
      <td><?php echo $showmobile_vehicle->getModel() ?></td>
    </tr>
    <tr>
      <th>Color:</th>
      <td><?php echo $showmobile_vehicle->getColorId() ?></td>
    </tr>
    <tr>
      <th>Mpg:</th>
      <td><?php echo $showmobile_vehicle->getMpg() ?></td>
    </tr>
    <tr>
      <th>Seats:</th>
      <td><?php echo $showmobile_vehicle->getSeats() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $showmobile_vehicle->getUserId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $showmobile_vehicle->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $showmobile_vehicle->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('vehicle/edit?id='.$showmobile_vehicle->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('vehicle/index') ?>">List</a>
