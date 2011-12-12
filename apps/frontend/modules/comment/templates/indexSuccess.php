<h1>Comments List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Contents</th>
      <th>Created by</th>
      <th>Updated by</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($comments as $comment): ?>
    <tr>
      <td><a href="<?php echo url_for('comment/show?id='.$comment->getId()) ?>"><?php echo $comment->getId() ?></a></td>
      <td><?php echo $comment->getContents() ?></td>
      <td><?php echo $comment->getCreatedBy() ?></td>
      <td><?php echo $comment->getUpdatedBy() ?></td>
      <td><?php echo $comment->getCreatedAt() ?></td>
      <td><?php echo $comment->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('comment/new') ?>">New</a>
