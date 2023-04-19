<?php
class Modelinputan extends CI_Model
{
    function proses_data($array)
    {
        $nama = $array['nama'];
        $nis = $array['nis'];
        $kelas = $array['kelas'];
        $tgl_lhr = $array['tgl-lhr'];
        $tmpt_lhr = $array['tmpt_lhr'];
        $alamat = $array['alamat'];
        $jns_klmn = $array['jns_klmn'];
        $agama = $array['agama'];
    }
}
