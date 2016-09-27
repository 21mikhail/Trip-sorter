<?php 

spl_autoload_register();

use lib\Debug;
use app\Jorney\YouWeJorney;
use app\Transport\BusTransport;
use app\Transport\TrainTransport;
use app\Transport\AirplaneTransport;

$jorney= new YouWeJorney();


$jorney->add(new BusTransport(
        'Barcelona',
        'Gerona Airport', 
        array(
            'seat' => 'No seat assignment'
            )
    ));

$jorney->add(new AirplaneTransport(
        'Gerona Airport',
        'Stockholm', 
        array('number' => 'SK455',
              'seat' => '3A',
              'gate' => '45B',
              'baggage' => '344',
            )
    ));

$jorney->add(new AirplaneTransport(
        'Stockholm',
        'New York JFK', 
        array('number' => 'SK22',
              'seat' => '7B',
              'gate' => '22',
              'baggage' => 'automatically',
            )
    ));

$jorney->add(new TrainTransport(
        'Madrid', 
        'Barcelona',
        array('number' => '78A',
              'seat' => '45B'
            )
    ));
    
$jorney->sortByUsort();

echo $jorney->getView('This is sort by function usort');


?>