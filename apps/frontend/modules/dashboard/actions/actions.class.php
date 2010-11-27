<?php

/**
 * troop actions.
 *
 * @package    Showmobile
 * @subpackage troop
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class dashboardActions extends sfActions {
  public function executeIndex(sfWebRequest $request) {
      // vehicles
      $q = Doctrine_Query::create()
        ->from('ShowmobileVehicle v')
        ->where('v.user_id = ?',$this->getUser()->getProfile()->getID());
      
      $this->vehicles = $q->execute(); 
      // drives
      $q = Doctrine_Query::create()
        ->from('ShowmobileDriver d')
        ->where('d.user_id = ?',$this->getUser()->getProfile()->getID());
      
      $this->drives = $q->execute(); 
      //passengers
      $q = Doctrine_Query::create()
        ->from('ShowmobilePassenger p')
        ->leftJoin('p.Driver d')
        ->where('d.user_id = ?',$this->getUser()->getProfile()->getID());
      
      $this->passengers = $q->execute(); 
      //rides
      $q = Doctrine_Query::create()
        ->from('ShowmobilePassenger p')
        ->where('p.user_id = ?',$this->getUser()->getProfile()->getID());
      
      $this->rides = $q->execute(); 
      //events
      $q = Doctrine_Query::create()
        ->from('ShowmobileEvent e')
        ->leftJoin('e.Venue v')
        ->leftJoin('v.Address a');
        
      
      $this->events = $q->execute();
      
      //gmap
      $this->gMap = new GMap();
      $this->getUser()->locale = new ip2location($request->getRemoteAddress());
      $this->gMap->addMarker(new GMapMarker($this->getUser()->locale->Latitude,$this->getUser()->locale->Longitude));
      $this->gMap->centerAndZoomOnMarkers();
  }
}
