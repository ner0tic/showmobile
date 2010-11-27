<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $showmobile_event->getId() ?></td>
    </tr>
    <tr>
      <th>Start time:</th>
      <td><?php echo $showmobile_event->getStartTime() ?></td>
    </tr>
    <tr>
      <th>Cost:</th>
      <td><?php echo $showmobile_event->getCost() ?></td>
    </tr>
    <tr>
      <th>Venue:</th>
      <td><?php echo $showmobile_event->getVenueId() ?></td>
    </tr>
    <tr>
      <th>Flyer:</th>
      <td><?php echo $showmobile_event->getFlyer() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $showmobile_event->getUserId() ?></td>
    </tr>
    <tr>
      <th>Contact:</th>
      <td><?php echo $showmobile_event->getContact() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $showmobile_event->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $showmobile_event->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('event/edit?id='.$showmobile_event->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('event/index') ?>">List</a>
