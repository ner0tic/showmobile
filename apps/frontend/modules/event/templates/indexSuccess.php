<?php use_stylesheet('events.css') ?>
<h1>Showmobile events List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Start time</th>
      <th>Cost</th>
      <th>Venue</th>
      <th>Flyer</th>
      <th>User</th>
      <th>Contact</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($showmobile_events as $showmobile_event): ?>
    <tr>
      <td><a href="<?php echo url_for('event/show?id='.$showmobile_event->getId()) ?>"><?php echo $showmobile_event->getId() ?></a></td>
      <td><?php echo $showmobile_event->getStartTime() ?></td>
      <td><?php echo $showmobile_event->getCost() ?></td>
      <td><?php echo $showmobile_event->getVenueId() ?></td>
      <td><?php echo $showmobile_event->getFlyer() ?></td>
      <td><?php echo $showmobile_event->getUserId() ?></td>
      <td><?php echo $showmobile_event->getContact() ?></td>
      <td><?php echo $showmobile_event->getCreatedAt() ?></td>
      <td><?php echo $showmobile_event->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('event/new') ?>">New</a>
