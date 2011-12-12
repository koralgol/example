<?php include_partial('global/pager', array('pager' => $pager, 'rule_name' => 'hint_pager'))?>
	<?php foreach ($sf_data->getRaw('pager')->getResults() as $item):?>
		<?php include_partial('main/onehint', array('hint' => $item))?>
		<br class="czyszczenie" />
	<?php endforeach;?>
<?php include_partial('global/pager', array('pager' => $pager, 'rule_name' => 'hint_pager'))?>