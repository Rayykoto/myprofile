<?php 

if (! function_exists('money_format')) {
    /**
     * moneyFormat
     *
     * @param  mixed $str
     * @return void
     */
    function moneyFormat($str) {
        return 'Rp. ' . number_format($str, '0', '', '.');
    }
}

?>