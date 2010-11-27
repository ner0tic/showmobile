<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $showmobile_venue->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $showmobile_venue->getName() ?></td>
    </tr>
    <tr>
      <th>Address book:</th>
      <td><?php echo $showmobile_venue->getAddressBookId() ?></td>
    </tr>
    <tr>
      <th>Phone:</th>
      <td><?php echo $showmobile_venue->getPhone() ?></td>
    </tr>
    <tr>
      <th>Fax:</th>
      <td><?php echo $showmobile_venue->getFax() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $showmobile_venue->getUrl() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $showmobile_venue->getEmail() ?></td>
    </tr>
    <tr>
      <th>Img:</th>
      <td><?php echo $showmobile_venue->getImg() ?></td>
    </tr>
    <tr>
      <th>Logo:</th>
      <td><?php echo $showmobile_venue->getLogo() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $showmobile_venue->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $showmobile_venue->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('venue/edit?id='.$showmobile_venue->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('venue/index') ?>">List</a>
