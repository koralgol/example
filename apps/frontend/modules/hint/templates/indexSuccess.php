<h1>Hints List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Lead</th>
      <th>Contents</th>
      <th>Created by</th>
      <th>Updated by</th>
      <th>Slug</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($hints as $hint): ?>
    <tr>
      <td><a href="<?php echo url_for('hint/show?id='.$hint->getId()) ?>"><?php echo $hint->getId() ?></a></td>
      <td><?php echo $hint->getTitle() ?></td>
      <td><?php echo $hint->getLead() ?></td>
      <td><?php echo $hint->getContents() ?></td>
      <td><?php echo $hint->getCreatedBy() ?></td>
      <td><?php echo $hint->getUpdatedBy() ?></td>
      <td><?php echo $hint->getSlug() ?></td>
      <td><?php echo $hint->getCreatedAt() ?></td>
      <td><?php echo $hint->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('hint/new') ?>">New</a>
