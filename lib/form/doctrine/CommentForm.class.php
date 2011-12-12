<?php

/**
 * Comment form.
 *
 * @package    byexample
 * @subpackage form
 * @author     koralgol
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CommentForm extends BaseCommentForm
{
  public function configure()
  {
  	parent::setup();
  	
  	unset(
  		$this['created_at'],
  		$this['updated_at'],
  		$this['created_by'],
  		$this['updated_by']
//      $this['examples_list'],
//      $this['example_list']
  	);
  }
}
