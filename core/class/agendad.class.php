<?php

/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

/* * ***************************Includes********************************* */
require_once __DIR__  . '/../../../../core/php/core.inc.php';

class agendad extends eqLogic {
    /*     * *************************Attributs****************************** */
    
  /*
   * Permet de définir les possibilités de personnalisation du widget (en cas d'utilisation de la fonction 'toHtml' par exemple)
   * Tableau multidimensionnel - exemple: array('custom' => true, 'custom::layout' => false)
	public static $_widgetPossibility = array();
   */
    
    /*     * ***********************Methode static*************************** */

    /*
     * Fonction exécutée automatiquement toutes les minutes par Jeedom
      public static function cron() {
      }
     */

    /*
     * Fonction exécutée automatiquement toutes les 5 minutes par Jeedom
      public static function cron5() {
      }
     */

    /*
     * Fonction exécutée automatiquement toutes les 10 minutes par Jeedom
      public static function cron10() {
      }
     */
    
    /*
     * Fonction exécutée automatiquement toutes les 15 minutes par Jeedom
      public static function cron15() {
      }
     */
    
    /*
     * Fonction exécutée automatiquement toutes les 30 minutes par Jeedom
      public static function cron30() {
      }
     */
    
    /*
     * Fonction exécutée automatiquement toutes les heures par Jeedom
      public static function cronHourly() {
      }
     */

    /*
     * Fonction exécutée automatiquement tous les jours par Jeedom
      public static function cronDaily() {
      }
     */



    /*     * *********************Méthodes d'instance************************* */
  public function randomVdm() {
    //test
  }
 // Fonction exécutée automatiquement avant la création de l'équipement 
    public function preInsert() {
        
    }

 // Fonction exécutée automatiquement après la création de l'équipement 
    public function postInsert() {
        
    }

 // Fonction exécutée automatiquement avant la mise à jour de l'équipement 
    public function preUpdate() {
         if (empty($this->getConfiguration('param1'))) {
        throw new Exception(__('L\'URL doit être renseigné',__FILE__));
      } else

      {

      // throw new Exception(__('L\'URL est renseigné '.$this->getConfiguration('param1'),__FILE__));
      }
      if (empty($this->getConfiguration('param2'))) {
        throw new Exception(__('Le nom doit être renseigné',__FILE__));
      }

       if (empty($this->getConfiguration('param3'))) {
        throw new Exception(__('Le prénom doit être renseigné',__FILE__));
      }
    }

 // Fonction exécutée automatiquement après la mise à jour de l'équipement 
    public function postUpdate() {
        
    }

 // Fonction exécutée automatiquement avant la sauvegarde (création ou mise à jour) de l'équipement 
    public function preSave() {
        
    }

public function collect_agenda(){

}

 // Fonction exécutée automatiquement après la sauvegarde (création ou mise à jour) de l'équipement 
    public function postSave() {
    $info = $this->getCmd(null, 'alarm');
    if (!is_object($info)) {
      $info = new agendadCmd();
      $info->setName(__('alarm', __FILE__));
    }
    $info->setLogicalId('alarm');
    $info->setEqLogic_id($this->getId());
    $info->setType('info');
    $info->setSubType('string');
    $info->save(); 

  // Next_event
    $info = $this->getCmd(null, 'next_event_start');
    if (!is_object($info)) {
      $info = new agendadCmd();
      $info->setName(__('next_event_start', __FILE__));
    }
    $info->setLogicalId('next_event_start');
    $info->setEqLogic_id($this->getId());
    $info->setType('info');
    $info->setSubType('string');
    $info->save();  
    
    $info = $this->getCmd(null, 'next_event_end');
    if (!is_object($info)) {
      $info = new agendadCmd();
      $info->setName(__('next_event_end', __FILE__));
    }
    $info->setLogicalId('next_event_end');
    $info->setEqLogic_id($this->getId());
    $info->setType('info');
    $info->setSubType('string');
    $info->save();  

    $info = $this->getCmd(null, 'next_event_subject');
    if (!is_object($info)) {
      $info = new agendadCmd();
      $info->setName(__('next_event_subject', __FILE__));
    }
    $info->setLogicalId('next_event_subject');
    $info->setEqLogic_id($this->getId());
    $info->setType('info');
    $info->setSubType('string');
    $info->save();  

    $info = $this->getCmd(null, 'next_event_room');
    if (!is_object($info)) {
      $info = new agendadCmd();
      $info->setName(__('next_event_room', __FILE__));
    }
    $info->setLogicalId('next_event_room');
    $info->setEqLogic_id($this->getId());
    $info->setType('info');
    $info->setSubType('string');
    $info->save();  


    $info = $this->getCmd(null, 'next_event_professor');
    if (!is_object($info)) {
      $info = new agendadCmd();
      $info->setName(__('next_event_professor', __FILE__));
    }
    $info->setLogicalId('next_event_professor');
    $info->setEqLogic_id($this->getId());
    $info->setType('info');
    $info->setSubType('string');
    $info->save();  


    $info = $this->getCmd(null, 'next_event_temp');
    if (!is_object($info)) {
      $info = new agendadCmd();
      $info->setName(__('next_event_temp', __FILE__));
    }
    $info->setLogicalId('next_event_temp');
    $info->setEqLogic_id($this->getId());
    $info->setType('info');
    $info->setSubType('string');
    $info->save();  

 // Current_event

     $info = $this->getCmd(null, 'current_event_start');
    if (!is_object($info)) {
      $info = new agendadCmd();
      $info->setName(__('current_event_start', __FILE__));
    }
    $info->setLogicalId('current_event_start');
    $info->setEqLogic_id($this->getId());
    $info->setType('info');
    $info->setSubType('string');
    $info->save();  
    
    $info = $this->getCmd(null, 'current_event_end');
    if (!is_object($info)) {
      $info = new agendadCmd();
      $info->setName(__('current_event_end', __FILE__));
    }
    $info->setLogicalId('current_event_end');
    $info->setEqLogic_id($this->getId());
    $info->setType('info');
    $info->setSubType('string');
    $info->save();  

    $info = $this->getCmd(null, 'current_event_subject');
    if (!is_object($info)) {
      $info = new agendadCmd();
      $info->setName(__('current_event_subject', __FILE__));
    }
    $info->setLogicalId('current_event_subject');
    $info->setEqLogic_id($this->getId());
    $info->setType('info');
    $info->setSubType('string');
    $info->save();  

    $info = $this->getCmd(null, 'current_event_room');
    if (!is_object($info)) {
      $info = new agendadCmd();
      $info->setName(__('current_event_room', __FILE__));
    }
    $info->setLogicalId('current_event_room');
    $info->setEqLogic_id($this->getId());
    $info->setType('info');
    $info->setSubType('string');
    $info->save();  


    $info = $this->getCmd(null, 'current_event_professor');
    if (!is_object($info)) {
      $info = new agendadCmd();
      $info->setName(__('current_event_professor', __FILE__));
    }
    $info->setLogicalId('current_event_professor');
    $info->setEqLogic_id($this->getId());
    $info->setType('info');
    $info->setSubType('string');
    $info->save();  


    // Current_event
$info = $this->getCmd(null, 'current_time_epsi');
    if (!is_object($info)) {
      $info = new agendadCmd();
      $info->setName(__('current_time_epsi', __FILE__));
    }
    $info->setLogicalId('current_time_epsi');
    $info->setEqLogic_id($this->getId());
    $info->setType('info');
    $info->setSubType('string');
    $info->save();  


    $info = $this->getCmd(null, 'current_date_epsi');
    if (!is_object($info)) {
      $info = new agendadCmd();
      $info->setName(__('current_date_epsi', __FILE__));
    }
    $info->setLogicalId('current_date_epsi');
    $info->setEqLogic_id($this->getId());
    $info->setType('info');
    $info->setSubType('string');
    $info->save();  


    // Refresh

    $refresh = $this->getCmd(null, 'refresh');
    if (!is_object($refresh)) {
      $refresh = new agendadCmd();
      $refresh->setName(__('Rafraichir', __FILE__));
    }
    $refresh->setEqLogic_id($this->getId());
    $refresh->setLogicalId('refresh');
    $refresh->setType('action');
    $refresh->setSubType('other');
    $refresh->save();        
    }

 // Fonction exécutée automatiquement avant la suppression de l'équipement 
    public function preRemove() {
        
    }

 // Fonction exécutée automatiquement après la suppression de l'équipement 
    public function postRemove() {
        
    }

    /*
     * Non obligatoire : permet de modifier l'affichage du widget (également utilisable par les commandes)
      public function toHtml($_version = 'dashboard') {

      }
     */

    /*
     * Non obligatoire : permet de déclencher une action après modification de variable de configuration
    public static function postConfig_<Variable>() {
    }
     */

    /*
     * Non obligatoire : permet de déclencher une action avant modification de variable de configuration
    public static function preConfig_<Variable>() {
    }
     */

    /*     * **********************Getteur Setteur*************************** */
}
function collect_agenda(){

log::add('agendad','info',' --------collect_agenda_begin-----------');
log::add('agendad','info',' ');
log::add('agendad','info',' --------INIT-----------');
log::add('agendad','info',' ');
// Step 1: Recuperation du contenu du fichier 
$alarm_hours=00;
$alarm_minutes=00;
$next_event=0;
//initialisation des variables jeedom
$eqlogic->checkAndUpdateCmd('alarm',"~~.~~");

  log::add('agendad','info',' --------collect_agenda_end-----------');

}

class agendadCmd extends cmd {
    /*     * *************************Attributs****************************** */
    
    /*
      public static $_widgetPossibility = array();
    */
    
    /*     * ***********************Methode static*************************** */


    /*     * *********************Methode d'instance************************* */

    /*
     * Non obligatoire permet de demander de ne pas supprimer les commandes même si elles ne sont pas dans la nouvelle configuration de l'équipement envoyé en JS
      public function dontRemoveCmd() {
      return true;
      }
     */

  // Exécution d'une commande  

      
    public function execute($_options = array()) {
    $eqlogic = $this->getEqLogic(); //récupère l'éqlogic de la commande $this
    switch ($this->getLogicalId()) {
        case 'refresh': // LogicalId de la commande rafraîchir que l’on a créé dans la méthode Postsave de la classe vdm . 
   // $info = $eqlogic->randomVdm();  //On lance la fonction randomVdm() pour récupérer une vdm et on la stocke dans la variable $info
    //$info = $eqlogic->getCmd('info', 'next_event_start');
      // $eqlogic->checkAndUpdateCmd('next_event_start', $info); // on met à jour la commande avec le LogicalId "story"  de l'eqlogic 

//collect_agenda();
$info = $eqlogic->collect_agenda(); 
log::add('agendad','info',' ');
log::add('agendad','info',' --------INIT-----------');
log::add('agendad','info',' ');
// Step 1: Recuperation du contenu du fichier 
$alarm_hours=00;
$alarm_minutes=00;
$next_event=0;
//initialisation des variables jeedom
$eqlogic->checkAndUpdateCmd('alarm',"~~.~~");
$eqlogic->checkAndUpdateCmd('next_event_start',"");   
$eqlogic->checkAndUpdateCmd('next_event_end',"no event"); 
$eqlogic->checkAndUpdateCmd('next_event_subjectn',"");  
$eqlogic->checkAndUpdateCmd('next_event_room',""); 
$eqlogic->checkAndUpdateCmd('next_event_professor',"");  
$eqlogic->checkAndUpdateCmd('current_event_start',"");   
$eqlogic->checkAndUpdateCmd('current_event_end',"no event"); 
$eqlogic->checkAndUpdateCmd('current_event_subject',"");  
$eqlogic->checkAndUpdateCmd('current_event_room',""); 
$eqlogic->checkAndUpdateCmd('current_event_professor',"");  

$time_hours=date('H', time());
//force l'heure pour des tests
//$time_hours=10;

$time_minutes=date('i', time());
log::add('agendad','info','Time : '.$time_hours.":".$time_minutes);
$eqlogic->checkAndUpdateCmd('current_time_epsi',$time_hours.":".$time_minutes);  

$date_jour= date("m-d-y");
//force la date pour des tests
//$date_jour= "09-28-20";
$eqlogic->checkAndUpdateCmd('current_date_epsi'," ".$date_jour);  

log::add('agendad','info','Date : '.$date_jour);

$param1 =$eqlogic->getConfiguration('param1');
$param2 =$eqlogic->getConfiguration('param2');
$param3 =$eqlogic->getConfiguration('param3');

log::add('agendad','info','-----SET UP----------');
//log::add('agendad','info','Url : '.$param1.' -----');
//log::add('agendad','info','Nom: '.$param2.' -----');
//log::add('agendad','info','Prenom: '.$param3.' -----');
//log::add('agendad','info',' ');
$api = $param1.$date_jour."?firstname=".$param3."&lastname=".$param2;
//$api = "https://api-calendar.calendz.app/v1/day/:".$date_jour."?firstname=xxx&lastname=xxxx";
log::add('agendad','info','Api : '.$api);

$json = file_get_contents($api);

log::add('agendad','info','-----RAW----------');
log::add('agendad','info','RAW : '.$json);
log::add('agendad','info','');
//Step 2: Decodage du JSON et recuperation des infos souhaitees
$jsonData = json_decode($json,true);
log::add('agendad','info','-----DECODE-----');
log::add('agendad','info','');

if(is_array($jsonData)){
log::add('agendad','info','-----IMPORT SUCCESS-----');
log::add('agendad','info','');

 
foreach ($jsonData as $value=>$jsonKey) {
log::add('agendad','info','-------'.strtoupper($value).'-------');
//$jsonTemp=json_encode($jsonKey);   
//log::add('agendad','info','RAW : '.$jsonTemp);
//log::add('agendad','info','');
 
//trie par horaire ascendant  
array_multisort(array_column($jsonKey, 'start'),SORT_ASC,$jsonKey);

//extrait le premier cours de la journée  
$jsonKey_top=array_slice($jsonKey, 0, 1);  
//$jsonTemp=json_encode($jsonKey_top);   
//log::add('agendad','info','**** RAW_TEMP : '.$jsonTemp);
//log::add('agendad','info','');

log::add('agendad','info','------------1er cours-----------');  
foreach ($jsonKey_top as $value2=>$jsonKey2) {
log::add('agendad','info','------------#'.$value2.'-----------');
//$jsonTemp=json_encode($jsonKey2);   
//log::add('agendad','info','RAW : '.$jsonTemp);
log::add('agendad','info','Date          : '.$jsonKey2['date']);
log::add('agendad','info','Start~End  :'.$jsonKey2['start'].'~'.$jsonKey2['end']);
log::add('agendad','info','Sujet          : '.$jsonKey2['subject']);
log::add('agendad','info','Professeur : '.$jsonKey2['professor']);
log::add('agendad','info','Room         : '.$jsonKey2['room']); 

// alarm  
$parsed = date_parse($jsonKey2['start']);
$time_seconds = $parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'];
$alarm_clock_seconds=$time_seconds-3600;

$alarm_hours=gmdate("H",$alarm_clock_seconds); 
$alarm_minutes=gmdate("i",$alarm_clock_seconds);   
log::add('agendad','info','wake-up     : '.$alarm_hours.":".$alarm_minutes);
$eqlogic->checkAndUpdateCmd('alarm',$alarm_hours.$alarm_minutes);
  
//log::add('agendad','info','Weekday    :'.$jsonKey2['weekday']);
//log::add('agendad','info','Presence :'.$jsonKey2['presence']);
//log::add('agendad','info','BTS :'.$jsonKey2['bts']);
log::add('agendad','info','');
}
  
log::add('agendad','info','------------tous les cours-----------');  
  
foreach ($jsonKey as $value2=>$jsonKey2) {
log::add('agendad','info','------------#'.$value2.'-----------');
//$jsonTemp=json_encode($jsonKey2);   
//log::add('agendad','info','RAW : '.$jsonTemp);
  
log::add('agendad','info','Date           : '.$jsonKey2['date']);
log::add('agendad','info','Start~End  :'.$jsonKey2['start'].'~'.$jsonKey2['end']);
log::add('agendad','info','Sujet          : '.$jsonKey2['subject']);
log::add('agendad','info','Professeur : '.$jsonKey2['professor']);
log::add('agendad','info','Room         : '.$jsonKey2['room']);
//log::add('agendad','info','Weekday    :'.$jsonKey2['weekday']);
//log::add('agendad','info','Presence :'.$jsonKey2['presence']);
//log::add('agendad','info','BTS :'.$jsonKey2['bts']);
  
  
  
  
 
  
  
  
 $time_hours_start=substr($jsonKey2['start'],0, 2);
 $time_minutes_start=substr($jsonKey2['start'], -2);
  $time_hours_minutes_start_resultat=(($time_hours_start*60)+$time_minutes_start);
  $time_hours_minutes_actuel_resultat=($time_hours*60)+$time_minutes;
  
  
    $time_hours_fin=substr($jsonKey2['end'],0, 2);
   $time_minutes_fin=substr($jsonKey2['end'], -2);
  $time_hours_minutes_fin_resultat=(($time_hours_fin*60)+$time_minutes_fin);

  
  

if ($time_hours_minutes_start_resultat>$time_hours_minutes_actuel_resultat) {
if ($next_event=="0") {
// $scenario->setlog('heure cours en minute'.$time_hours_minutes_start_resultat.'heure en minute'.$time_hours_minutes_actuel_resultat);
log::add('agendad','info','****Futur 1er event****');
$next_event=1;
$eqlogic->checkAndUpdateCmd('next_event_start',str_replace(":","",$jsonKey2['start']));   
$eqlogic->checkAndUpdateCmd('next_event_end',str_replace(":","",$jsonKey2['end'])); 
$eqlogic->checkAndUpdateCmd('next_event_subject',$jsonKey2['subject']);  
$eqlogic->checkAndUpdateCmd('next_event_room',$jsonKey2['room']); 
$eqlogic->checkAndUpdateCmd('next_event_professor',$jsonKey2['professor']);  
} else {
log::add('agendad','info','****Futur event****');
}
  
} else {
log::add('agendad','info','****Past event****');
   if($time_hours_minutes_fin_resultat>=$time_hours_minutes_actuel_resultat){
  //    $scenario->setlog('Evenement en cours');
   $eqlogic->checkAndUpdateCmd('current_event_start',str_replace(":","",$jsonKey2['start']));   
   $eqlogic->checkAndUpdateCmd('current_event_end',str_replace(":","",$jsonKey2['end'])); 
  $eqlogic->checkAndUpdateCmd('current_event_subject',$jsonKey2['subject']);  
   $eqlogic->checkAndUpdateCmd('current_event_room',$jsonKey2['room']); 
   $eqlogic->checkAndUpdateCmd('current_event_professor',$jsonKey2['professor']);  
  } 
  log::add('agendad','info','');
} 
}
}
  
//log::add('agendad','info','weekNumber    :'.$jsonData['weekNumber']);
//log::add('agendad','info','scrappedToday :'.$jsonData['scrappedToday']);
log::add('agendad','info','');  
}

   
    break;
    }
    }
    }


