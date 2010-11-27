<h1>Showmobile passengers List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Driver</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($showmobile_passengers as $showmobile_passenger): ?>
    <tr>
      <td><a href="<?php echo url_for('passenger/show?id='.$showmobile_passenger->getId()) ?>"><?php echo $showmobile_passenger->getId() ?></a></td>
      <td><?php echo $showmobile_passenger->getUserId() ?></td>
      <td><?php echo $showmobile_passenger->getDriverId() ?></td>
      <td><?php echo $showmobile_passenger->getCreatedAt() ?></td>
      <td><?php echo $showmobile_passenger->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('passenger/new') ?>">New</a>
