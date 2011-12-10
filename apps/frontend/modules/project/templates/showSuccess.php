<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $project->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $project->getTitle() ?></td>
    </tr>
    <tr>
      <th>Lead:</th>
      <td><?php echo $project->getLead() ?></td>
    </tr>
    <tr>
      <th>Contents:</th>
      <td><?php echo $project->getContents() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $project->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $project->getUpdatedBy() ?></td>
    </tr>
    <tr>
      <th>Slug:</th>
      <td><?php echo $project->getSlug() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $project->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $project->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('project/edit?id='.$project->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('project/index') ?>">List</a>
