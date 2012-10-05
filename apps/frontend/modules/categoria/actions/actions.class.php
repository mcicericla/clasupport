<?php

/**
 * categoria actions.
 *
 * @package    clasupport
 * @subpackage categoria
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoriaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->categoria_tickets = Doctrine_Core::getTable('CategoriaTicket')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CategoriaTicketForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CategoriaTicketForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($categoria_ticket = Doctrine_Core::getTable('CategoriaTicket')->find(array($request->getParameter('id'))), sprintf('Object categoria_ticket does not exist (%s).', $request->getParameter('id')));
    $this->form = new CategoriaTicketForm($categoria_ticket);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($categoria_ticket = Doctrine_Core::getTable('CategoriaTicket')->find(array($request->getParameter('id'))), sprintf('Object categoria_ticket does not exist (%s).', $request->getParameter('id')));
    $this->form = new CategoriaTicketForm($categoria_ticket);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($categoria_ticket = Doctrine_Core::getTable('CategoriaTicket')->find(array($request->getParameter('id'))), sprintf('Object categoria_ticket does not exist (%s).', $request->getParameter('id')));
    $categoria_ticket->delete();

    $this->redirect('categoria/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $categoria_ticket = $form->save();

      $this->redirect('categoria/edit?id='.$categoria_ticket->getId());
    }
  }
}
