<?php
namespace app\Jorney;

use app\Jorney\AbstractJorney;
use app\Jorney\InterfaceSortJorney;
use app\Sort\SortJorneyYouWe;
use app\View\ViewListJourney;


/**
 * Description of YouWeJorney
 *
 * @package app\Jorney
 * @author МИХАИЛ
 */
class YouWeJorney extends AbstractJorney implements InterfaceSortJorney{
    
    /**
     *
     * @var array 
     */
    private $sortBoardingCards=array();

    public function __call($name, $arguments) {}

    public function __get($name) {}

    public function __set($name, $value) {}
    
    
    /**
     * sorting cards
     * @return void 
     */
    public function sort() {
        $sortClass = new SortJorneyYouWe($this->boardingCards);

        $this->sortBoardingCards = $sortClass->sort();
    }
    
    /**
     * sorting cards
     * @return void 
     */
    public function sortByUsort() {
        $sortClass = new SortJorneyYouWe($this->boardingCards);

        $this->sortBoardingCards = $sortClass->sortByUsort();
    }

    /**
     * array list trips
     * @param type $param
     * @return array
     */
    public function getSort() {
        return $this->sortBoardingCards;
    }
    
    /**
     * view sort list
     * @return string html
     */
    public function getView($header='') {
       
        $viewClass= new ViewListJourney($header,$this->sortBoardingCards);

        return $viewClass->render();
        
    }
}
