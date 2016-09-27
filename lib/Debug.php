<?php

namespace lib;

/**
 * Class for Debug data
 * 
 * @package lib
 * @author МИХАИЛ
 */
class Debug {

    static public function dump($var = null) {
        while (ob_get_level())
            ob_end_clean();

        if (func_num_args() > "1")
            $var = func_get_args();

        echo '<pre>';
        $debug_backtrace = debug_backtrace();
        $trace = array_shift($debug_backtrace);
        echo "<b>Debug <font color=red>" . basename($trace['file']) . "</font> on line <font color=red>{$trace['line']}</font></b>:\r\n";
        $file = file($trace['file']);
        echo str_replace("\t", "", "<div style='background: #f5f5f5; padding: 0.2em 0em;'>" . htmlspecialchars($file[$trace['line'] - 1]) . "</div>\r\n");

        echo '<b>Type</b>: ' . gettype($var) . "\r\n";

        if (is_string($var))
            echo "<b>Lenght</b>: " . strlen($var) . "\r\n";

        if (is_array($var))
            echo "<b>Elemnts</b>: " . count($var) . "\r\n";

        echo '<b>' . gettype($var) . '</b>: ';

        if (is_string($var)) {
            echo htmlspecialchars($var);
        } elseif (is_object($var)) {
            $print_r = array();

            $print_r['var'] = $var;
            $print_r['methods'] = get_class_methods($var);

            print_r($print_r);
        } else {
            $print_r = print_r($var, true);

            if ((strstr($print_r, '<') !== false) || (strstr($print_r, '>') !== false)) {
                $print_r = htmlspecialchars($print_r);
            }
            echo $print_r;
        }

        echo '</pre>';

        exit;
    }

}
