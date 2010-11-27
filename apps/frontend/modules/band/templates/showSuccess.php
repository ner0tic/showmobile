<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $showmobile_band->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $showmobile_band->getName() ?></td>
    </tr>
    <tr>
      <th>Bio:</th>
      <td><?php echo $showmobile_band->getBio() ?></td>
    </tr>
    <tr>
      <th>Img:</th>
      <td><?php echo $showmobile_band->getImg() ?></td>
    </tr>
    <tr>
      <th>Logo:</th>
      <td><?php echo $showmobile_band->getLogo() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $showmobile_band->getUrl() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $showmobile_band->getEmail() ?></td>
    </tr>
    <tr>
      <th>Zone:</th>
      <td><?php echo $showmobile_band->getZoneId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $showmobile_band->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $showmobile_band->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('band/edit?id='.$showmobile_band->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('band/index') ?>">List</a>
