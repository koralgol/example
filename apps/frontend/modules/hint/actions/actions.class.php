<?php

/**
 * hint actions.
 *
 * @package    byexample
 * @subpackage hint
 * @author     koralgol
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class hintActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
//     $this->hints = Doctrine_Core::getTable('Hint')
//       ->createQuery('a')
//       ->execute();

  	$this->pager = new sfDoctrinePager('Hint', sfConfig::get('app_pager_hint_max_na_stronie'));
  	$this->pager->setQuery(Doctrine_Core::getTable('Hint')->createQuery('a'));
  	$this->pager->setPage($request->getParameter('page', 1));
  	$this->pager->init();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->hint = Doctrine_Core::getTable('Hint')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->hint);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new HintForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new HintForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($hint = Doctrine_Core::getTable('Hint')->find(array($request->getParameter('id'))), sprintf('Object hint does not exist (%s).', $request->getParameter('id')));
    $this->form = new HintForm($hint);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($hint = Doctrine_Core::getTable('Hint')->find(array($request->getParameter('id'))), sprintf('Object hint does not exist (%s).', $request->getParameter('id')));
    $this->form = new HintForm($hint);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($hint = Doctrine_Core::getTable('Hint')->find(array($request->getParameter('id'))), sprintf('Object hint does not exist (%s).', $request->getParameter('id')));
    $hint->delete();

    $this->redirect('hint/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $hint = $form->save();

      $this->redirect('hint/edit?id='.$hint->getId());
    }
  }
}
