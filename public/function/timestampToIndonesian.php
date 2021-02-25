<?php
function timestampToIndonesian($time){
    if($time < 60){
        return $time  . ' Detik';
    } else if($time < 3600) {
        return floor($time / 60) . ' Menit';
    } else if($time < 86400) {
        return floor($time / 3600) . ' Jam';
    } else if($time < 2592000) {
        return floor($time / 86400) . ' Hari';
    } else if($time < 31104000) {
        return floor($time / 2592000) . ' Bulan';
    } else {
        return floor($time / 31104000) . ' Tahun';
    }
}
?>