<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $example->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $example->getTitle() ?></td>
    </tr>
    <tr>
      <th>Lead:</th>
      <td><?php echo $example->getLead() ?></td>
    </tr>
    <tr>
      <th>Contents:</th>
      <td><?php echo $example->getContents() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $example->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $example->getUpdatedBy() ?></td>
    </tr>
    <tr>
      <th>Slug:</th>
      <td><?php echo $example->getSlug() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $example->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $example->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('example/edit?id='.$example->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('example/index') ?>">List</a>
