<?php
function kelulusan($nilai_akhir)
{
    if($nilai_akhir > 55)
    {
        return 'LULUS';
    } 
    elseif($nilai_akhir < 56)
    {
        return 'TIDAK LULUS';
    }
    else
    {
        return 'TIDAK VALID';
    }
}

function grade($nilai_akhir)
{
    if ($nilai_akhir <= 35) {
        return 'E';
    } elseif($nilai_akhir <= 55) {
        return 'D';
    } elseif($nilai_akhir <= 69) {
        return 'C';
    } elseif($nilai_akhir <= 84) {
        return 'B';
    } elseif($nilai_akhir <= 100) {
        return 'A';
    }else{
        return 'TIDAK VALID';
    }
}
?>