<?php
class mainComponents extends sfComponents
{
	public function executeOneexample(sfWebRequest $request)
	{
		$tmp = Doctrine_Core::getTable('Example')
		  ->createQuery('a')
		  ->limit(1)
		  ->execute();

		$this->example = $tmp[0];
	}
}