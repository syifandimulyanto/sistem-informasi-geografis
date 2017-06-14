<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    function backend_url($path = false)
    {
        $CI = &get_instance();
        $url = $CI->config->item('backend_url') .$path;
        return $url;
    }

    function backend_asset_url($uri = false)
    {
        $CI = &get_instance();
        return $CI->config->item('backend_asset_url') . $uri;
    }

    function frontend_url($path = false)
    {
        $CI = &get_instance();
        $url = $CI->config->item('frontend_url') .$path;
        return $url;
    }

    function frontend_asset_url($uri = false)
    {
        $CI = &get_instance();
        return $CI->config->item('frontend_asset_url') . $uri;
    }