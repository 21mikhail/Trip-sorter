<?php
namespace app\Sort;

use app\Sort\AbstractSortJorney;


/**
 * Description of app\Sort;
 *
 * @package app\Sort;
 * @author МИХАИЛ
 */

class SortJorneyYouWe extends AbstractSortJorney{
    
    public function __construct(array $dataSort) {
        parent::__construct($dataSort); 
    }
    
    /**
     * sorting trip by function usort;
     */
    public function sortByUsort() {
        usort($this->dataSort,function($a,$b){
            if($a->getTo()==$b->getFrom()){
                return -1;
            }
            elseif ($a->getFrom()==$b->getTo()) {
                return 1;
            }
            return 0;
        });
        
         return $this->dataSort;
    }
    
    public function sort() {
        return $this->dataSort;
    }
    


    
}