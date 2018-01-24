<?php
/**
 * Description of orc
 *
 * @author bouillon
 */
class orc extends character{
    public $health = 1000;
    
      public function useHammer(){
        return true;
    }
      public function useSword(){
        return true;
    }
}
