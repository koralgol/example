<?php include_partial('global/pager', array('pager' => $pager, 'rule_name' => 'project_pager'))?>

	<?php foreach ($sf_data->getRaw('pager')->getResults() as $item): ?>
		<?php include_partial('main/oneproject', array('project' => $item))?>
		<br class="czyszczenie" />
	<?php endforeach;?>
<?php include_partial('global/pager', array('pager' => $pager, 'rule_name' => 'project_pager'))?>