<?php

/**
 * example actions.
 *
 * @package    byexample
 * @subpackage example
 * @author     koralgol
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class exampleActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
//     $this->examples = Doctrine_Core::getTable('Example')
//       ->createQuery('a')
//       ->execute();
    
    $this->pager = new sfDoctrinePager('Example', sfConfig::get('app_pager_example_max_na_stronie'));
    $this->pager->setQuery(Doctrine_Core::getTable('Example')->createQuery('a'));
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->example = Doctrine_Core::getTable('Example')->findOneBySlug($request->getParameter('slug'));
    $this->forward404Unless($this->example);
    $this->form = new CommentForm();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ExampleForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ExampleForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($example = Doctrine_Core::getTable('Example')->find(array($request->getParameter('id'))), sprintf('Object example does not exist (%s).', $request->getParameter('id')));
    $this->form = new ExampleForm($example);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($example = Doctrine_Core::getTable('Example')->find(array($request->getParameter('id'))), sprintf('Object example does not exist (%s).', $request->getParameter('id')));
    $this->form = new ExampleForm($example);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($example = Doctrine_Core::getTable('Example')->find(array($request->getParameter('id'))), sprintf('Object example does not exist (%s).', $request->getParameter('id')));
    $example->delete();

    $this->redirect('example/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $example = $form->save();

      $this->redirect('example/edit?id='.$example->getId());
    }
  }
}
