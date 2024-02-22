<?php
interface Aves {
 public function setLocation($lat, $lgn); 
 public function setAltitude($alt);
 public function render();
  
}
interface AvesQueVoam extends Aves {
    public function setAltitude($alt);
}

class Papagaio implements AvesQueVoam  { /* Como papagaio voa, inseri a interface AvesQueVoam pois tem a função de altitude*/
    public function setLocation($lat, $lgn)
    {
        
    }
    public function setAltitude($alt) {

    }
    public function render(){

    }
}
    class Pinguim implements Aves { /* Como pinguim não voa, inseri a interface Aves pois não tem a função de altitude*/
    public function setLocation($lat, $lgn)
    {
        
    }
    public function setAltitude($alt) {

    }
    public function render(){
        
    }
}  