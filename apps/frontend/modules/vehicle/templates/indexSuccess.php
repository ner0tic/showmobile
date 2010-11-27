<h1>Showmobile vehicles List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Year</th>
      <th>Make</th>
      <th>Model</th>
      <th>Color</th>
      <th>Mpg</th>
      <th>Seats</th>
      <th>User</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($showmobile_vehicles as $showmobile_vehicle): ?>
    <tr>
      <td><a href="<?php echo url_for('vehicle/show?id='.$showmobile_vehicle->getId()) ?>"><?php echo $showmobile_vehicle->getId() ?></a></td>
      <td><?php echo $showmobile_vehicle->getYear() ?></td>
      <td><?php echo $showmobile_vehicle->getMake() ?></td>
      <td><?php echo $showmobile_vehicle->getModel() ?></td>
      <td><?php echo $showmobile_vehicle->getColorId() ?></td>
      <td><?php echo $showmobile_vehicle->getMpg() ?></td>
      <td><?php echo $showmobile_vehicle->getSeats() ?></td>
      <td><?php echo $showmobile_vehicle->getUserId() ?></td>
      <td><?php echo $showmobile_vehicle->getCreatedAt() ?></td>
      <td><?php echo $showmobile_vehicle->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('vehicle/new') ?>">New</a>
