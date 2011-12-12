<?php include_partial('global/pager', array('pager' => $pager, 'rule_name' => 'example_pager'))?>
	<?php foreach ($sf_data->getRaw('pager')->getResults() as $item): ?>
		<?php include_partial('main/oneexample', array('example' => $item)) ?>
		<br class="czyszczenie" />
	<?php endforeach;?>
<?php  include_partial('global/pager', array('pager' => $pager, 'rule_name' => 'example_pager'))?>