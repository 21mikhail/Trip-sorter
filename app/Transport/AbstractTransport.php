<?php
namespace app\Transport;

/**
 * Description of AbstractJorneys
 *
 * @package app\Transport
 * @author МИХАИЛ
 */
abstract class AbstractTransport {
    
    /**
     * array options seat
     * @var array 
     */
    protected $options;
    
    
    /**
     *from place
     * @var str 
     */
    protected $from;
    
    /**
     *to place
     * @var str 
     */
    protected $to;
    
    public function __construct($from,$to,array $options) {
        $this->from=$from;
        $this->to=$to;
        $this->options=$options;
    }
    
    
    /**
     * set option
     * @param str $key Description
     * @param str $value Description
     * @return void 
     */
    public function setOption( $key,$value) {
        $this->options[$key]=$value;
    }
    
    /**
     * get option all or by key
     * @param type $param
     * @return mixed 
     */
    public function getOptions($key=null) {
        $result=false;
        if($key===null){
            $result=$this->options;
        }
        elseif(isset($this->options[$key])){
            $result=$this->options[$key];
        }
        return $result;
    }
    

    /**
     * from strting trip  
     * @return type
     */
    public function getFrom() {
        return $this->from;
    }
    
    /**
     * from strting trip  
     * @return type
     */
    public function getTo() {
        return $this->to;
    }
   
    
    

}
