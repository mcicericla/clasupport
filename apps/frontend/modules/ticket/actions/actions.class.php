<?php

/**
 * ticket actions.
 *
 * @package    clasupport
 * @subpackage ticket
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ticketActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tickets = Doctrine_Core::getTable('Ticket')
      ->createQuery('a')
      ->execute();
  }
  
  public function executeHola(){
      $this->mensajes = array(1, 3, 5, 34, 24, 234, 12, 4);
      
  }

  public function executeNew(sfWebRequest $request)
  {
    
    $this->form = new TicketForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TicketForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ticket = Doctrine_Core::getTable('Ticket')->find(array($request->getParameter('id'))), sprintf('Object ticket does not exist (%s).', $request->getParameter('id')));
    $this->form = new TicketForm($ticket);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ticket = Doctrine_Core::getTable('Ticket')->find(array($request->getParameter('id'))), sprintf('Object ticket does not exist (%s).', $request->getParameter('id')));
    $this->form = new TicketForm($ticket);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ticket = Doctrine_Core::getTable('Ticket')->find(array($request->getParameter('id'))), sprintf('Object ticket does not exist (%s).', $request->getParameter('id')));
    $ticket->delete();

    $this->redirect('ticket/index');
  }
  
  public function executeAbiertos(sfWebRequest $request){
      $this->tickets = Doctrine_Core::getTable('Ticket')->findBy("estado_ticket_id", EstadoTicket::ESTADO_ABIERTO);
  }
  
  public function executeTodos(sfWebRequest $request){
      $this->tickets = Doctrine_Core::getTable('Ticket')->findBy("usuario_id", 1);
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      if($form->getObject()->isNew()){
          $this->getUser()->setFlash("info", "Su solicitud ha sido enviada");
      }
      else{
          $this->getUser()->setFlash("info", "Su solicitud ha sido actualizada");
      }
      
      $ticket = $form->save();

      $this->redirect('ticket/abiertos');
    }
  }
}
