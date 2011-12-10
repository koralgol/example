<h1>Projects List</h1>

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
    <?php foreach ($projects as $project): ?>
    <tr>
      <td><a href="<?php echo url_for('project/show?id='.$project->getId()) ?>"><?php echo $project->getId() ?></a></td>
      <td><?php echo $project->getTitle() ?></td>
      <td><?php echo $project->getLead() ?></td>
      <td><?php echo $project->getContents() ?></td>
      <td><?php echo $project->getCreatedBy() ?></td>
      <td><?php echo $project->getUpdatedBy() ?></td>
      <td><?php echo $project->getSlug() ?></td>
      <td><?php echo $project->getCreatedAt() ?></td>
      <td><?php echo $project->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('project/new') ?>">New</a>
