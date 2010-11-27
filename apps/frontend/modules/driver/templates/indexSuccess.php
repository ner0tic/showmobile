<h1>Showmobile drivers List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Vehicle</th>
      <th>Show</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($showmobile_drivers as $showmobile_driver): ?>
    <tr>
      <td><a href="<?php echo url_for('driver/show?id='.$showmobile_driver->getId()) ?>"><?php echo $showmobile_driver->getId() ?></a></td>
      <td><?php echo $showmobile_driver->getUserId() ?></td>
      <td><?php echo $showmobile_driver->getVehicleId() ?></td>
      <td><?php echo $showmobile_driver->getShowId() ?></td>
      <td><?php echo $showmobile_driver->getCreatedAt() ?></td>
      <td><?php echo $showmobile_driver->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('driver/new') ?>">New</a>
