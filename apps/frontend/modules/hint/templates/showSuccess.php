<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $hint->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $hint->getTitle() ?></td>
    </tr>
    <tr>
      <th>Lead:</th>
      <td><?php echo $hint->getLead() ?></td>
    </tr>
    <tr>
      <th>Contents:</th>
      <td><?php echo $hint->getContents() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $hint->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $hint->getUpdatedBy() ?></td>
    </tr>
    <tr>
      <th>Slug:</th>
      <td><?php echo $hint->getSlug() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $hint->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $hint->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('hint/edit?id='.$hint->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('hint/index') ?>">List</a>
