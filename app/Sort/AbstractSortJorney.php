<?php

namespace app\Sort;


/**
 * abstract class for sort Trip of journey
 * 
 * @package lib\sort;
 * @author МИХАИЛ
 */
abstract class AbstractSortJorney {

    protected $dataSort;
    
    
    public function __construct(array $dataSort) {
        $this->dataSort=$dataSort;
    }
    
    /**
     * sort Trip
     */
    abstract protected function sort();


}
