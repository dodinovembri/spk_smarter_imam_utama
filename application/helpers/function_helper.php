<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    if (!function_exists('check_role')) {
        function check_role($role_id)
        {
            if ($role_id == 0) {
                return "Administrator/ Pimpinan";
            }elseif ($role_id == 1) {
                return "Surveyor/ User";
            }
        }
    }

    if (!function_exists('check_status')) {
        function check_status($status)
        {
            if ($status == 0) {
                return "Tidak Aktif";
            }elseif ($status == 1) {
                return "Aktif";
            }
        }
    }

    if (!function_exists('check_sex')) {
        function check_sex($sex)
        {
            if ($sex == 0) {
                return "Perempuan";
            }elseif ($sex == 1) {
                return "Laki-Laki";
            }
        }
    }    

?>