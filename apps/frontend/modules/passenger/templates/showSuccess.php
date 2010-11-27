<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $showmobile_passenger->getId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $showmobile_passenger->getUserId() ?></td>
    </tr>
    <tr>
      <th>Driver:</th>
      <td><?php echo $showmobile_passenger->getDriverId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $showmobile_passenger->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $showmobile_passenger->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('passenger/edit?id='.$showmobile_passenger->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('passenger/index') ?>">List</a>
