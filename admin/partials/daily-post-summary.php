<?php

function get_daily_post_summary(){
    $today = getdate();
    $args = array(
        'post_type' => 'post',

    );
};