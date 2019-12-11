<?php

function flashalert($swalText, $swalType)
{
    $ci = get_instance();
    $ci->session->set_flashdata('swalText', $swalText);
    $ci->session->set_flashdata('swalType', $swalType);
}
