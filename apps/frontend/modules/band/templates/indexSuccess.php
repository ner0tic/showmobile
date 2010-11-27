<h1>Showmobile bands List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Bio</th>
      <th>Img</th>
      <th>Logo</th>
      <th>Url</th>
      <th>Email</th>
      <th>Zone</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($showmobile_bands as $showmobile_band): ?>
    <tr>
      <td><a href="<?php echo url_for('band/show?id='.$showmobile_band->getId()) ?>"><?php echo $showmobile_band->getId() ?></a></td>
      <td><?php echo $showmobile_band->getName() ?></td>
      <td><?php echo $showmobile_band->getBio() ?></td>
      <td><?php echo $showmobile_band->getImg() ?></td>
      <td><?php echo $showmobile_band->getLogo() ?></td>
      <td><?php echo $showmobile_band->getUrl() ?></td>
      <td><?php echo $showmobile_band->getEmail() ?></td>
      <td><?php echo $showmobile_band->getZoneId() ?></td>
      <td><?php echo $showmobile_band->getCreatedAt() ?></td>
      <td><?php echo $showmobile_band->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('band/new') ?>">New</a>
