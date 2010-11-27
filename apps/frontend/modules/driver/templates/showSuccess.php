<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $showmobile_driver->getId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $showmobile_driver->getUserId() ?></td>
    </tr>
    <tr>
      <th>Vehicle:</th>
      <td><?php echo $showmobile_driver->getVehicleId() ?></td>
    </tr>
    <tr>
      <th>Show:</th>
      <td><?php echo $showmobile_driver->getShowId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $showmobile_driver->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $showmobile_driver->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('driver/edit?id='.$showmobile_driver->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('driver/index') ?>">List</a>
