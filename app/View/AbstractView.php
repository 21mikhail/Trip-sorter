<?php
namespace app\View;
/**
 * Description of AbstractView
 *
 * @author МИХАИЛ
 */
abstract class AbstractView {

    protected $html = '';

    public function assign(array $assign) {

    }
    
    public function render() {
        return $html;
    }
    
    

}
