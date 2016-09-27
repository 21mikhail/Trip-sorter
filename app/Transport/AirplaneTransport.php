<?php
namespace app\Transport;

use app\Transport\AbstractTransport;
/**
 * Description of BusTransport
 *
 * @package app\Transport
 * @author МИХАИЛ
 */
class AirplaneTransport extends AbstractTransport{
   
    /**
     * @param str $from
     * @param str $to
     * @param array $options
     */
    public function __construct($from,$to,array $options) {
        
        parent::__construct($from, $to, $options);
        
    }
}
