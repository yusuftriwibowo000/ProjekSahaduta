<?php

function cekloginuser(){
    $ci = get_instance();
    if (!$ci->session->userdata('no_rm')){
        redirect('Ulogin');
    }
}