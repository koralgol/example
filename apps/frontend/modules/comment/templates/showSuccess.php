<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $comment->getId() ?></td>
    </tr>
    <tr>
      <th>Contents:</th>
      <td><?php echo $comment->getContents() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $comment->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $comment->getUpdatedBy() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $comment->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $comment->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('comment/edit?id='.$comment->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('comment/index') ?>">List</a>
