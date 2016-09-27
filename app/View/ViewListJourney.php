<?php
namespace app\View;

use app\View\AbstractView;
/**
 * Description of ViewListJorney
 *
 * @author МИХАИЛ
 */
class ViewListJourney extends AbstractView{
   
    protected $header='';
    
    protected $content='';


    public function __construct($header='',array $listTrips) {
        $this->header=$header;
        $this->listTrips=$listTrips;
    }
    
    /**
     * @return string HTML 
     */
    public function render() {
        $this->html.=$this->getHeader();
        $this->html.=$this->getListTrips();
        //\lib\Debug::dump($this->html);
        return $this->html;
    }
    
    
    
    protected function getHeader() {
        $html='';
        if($this->header!=''){
            return '<h3>'.$this->header.'</h3>';
        }
        return $html;
    }
    
    protected function getListTrips() {
        $html='';
        foreach ($this->listTrips as $key =>$trip){
            $html.= '<div style=" width:300px; border: 1px solid black;margin:10px;padding:10px">';
            $html.= '<p>From:<strong>'.$trip->getFrom().'</strong></p>';
            $html.= '<p>To:<strong>'.$trip->getTo().'</strong></p>';
            $html.= '<p>Data:';
                $html.='<ul>';
                foreach ($trip->getOptions() as $key => $value) {
                    $html.='<li>';
                    $html.=$key.':<strong>'.$value.'</strong>';
                    $html.='</li>';
                }
                $html.='</ul>';
            $html.='</hr>';
            $html.='</div>';
        }
        return $html;
    }
    
}
