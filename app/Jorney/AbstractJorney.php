<?php
namespace app\Jorney;

use app\Transport\AbstractTransport;
/**
 * Description of AbstractJorneys
 *
 * @package app\Jorney
 * @author МИХАИЛ
 */
abstract class AbstractJorney {

    /**
     * boarding cards
     * @var array 
     */
    protected $boardingCards;

    /**
     * add boarding card
     * @param \app\Jorney\AbstractTransport $trip
     */
    public function add(AbstractTransport $trip) {
        $this->boardingCards[]=$trip;
    }
    /**
     * remove trip
     * @param \app\Jorney\AbstractTransport $trip
     */
    public function remove(AbstractTransport $trip) {
       
    }
    
    /**
     * get Html data 
     */
    abstract protected function getView();

}
