<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    function backend_asset_js($uri)
    {
        return '<script type="text/javascript" src="' . backend_asset_url($uri) . '"></script>';
    }

    function backend_asset_css($uri)
    {
        return '<link href="' . backend_asset_url($uri) . '" type="text/css" rel="stylesheet" />';
    }

    function frontend_asset_js($uri)
    {
        return '<script type="text/javascript" src="' . frontend_asset_url($uri) . '"></script>';
    }

    function frontend_asset_css($uri)
    {
        return '<link href="' . frontend_asset_url($uri) . '" type="text/css" rel="stylesheet" />';
    }

    function single_upload($input = 'img', $path = './uploads/')
	{
	    $CI =& get_instance();
	    $config = array(
	        'upload_path'       => $path,
	        'max_size'          => 1024 * 100,
	        'allowed_types'     => 'gif|jpeg|jpg|png|svg',
	        'overwrite'         => true,
	        'remove_spaces'     => true,
	        'encrypt_name'      => true
	    );

	    $CI->load->library('upload', $config);
		
	    if ( ! $CI->upload->do_upload($input))
	    {
            $error = array('error' => $CI->upload->display_errors());
            return $error;
	    }
	    else
	    {
	    	$pic = array('data' => $CI->upload->data());
            resize_image($pic,'thumb', $path);
            resize_image($pic,'medium', $path);
            resize_image($pic,'large', $path);      
            return $pic;
	    }
	}  

    function do_upload_multiple( $attachName='image', $path='./uploads/') 
    {    
        $CI =& get_instance();
        $config = array(
            'upload_path'       => $path,
            'allowed_types'     => 'gif|jpeg|jpg|png|svg',
            'overwrite'         => true,
            'remove_spaces'     => true,
            'encrypt_name'      => true
        );

        $images = array();
        $CI->load->library('upload');
        $files = $_FILES;

        $count = count($_FILES[$attachName]['name']);
        $data  = array();
        for ($i = 0; $i < $count; $i++) 
        {
            $_FILES[$attachName]['name']        = $files[$attachName]['name'][$i];
            $_FILES[$attachName]['type']        = $files[$attachName]['type'][$i];
            $_FILES[$attachName]['tmp_name']    = $files[$attachName]['tmp_name'][$i];
            $_FILES[$attachName]['error']       = $files[$attachName]['error'][$i];
            $_FILES[$attachName]['size']        = $files[$attachName]['size'][$i];
            $fileName                           = $_FILES[$attachName]['name'];
            $images[]                           = $fileName;
            $config['file_name']                = $fileName;
            $CI->upload->initialize($config);
            if( $files[$attachName]['size'][$i] > 0)
            {
                if ($CI->upload->do_upload($attachName)) 
                {
                    $pic                = array('data' => $CI->upload->data());
                    $data['data'][]     = $CI->upload->data();

                    $data['status'][]   = "success";
                    $data['msg'][]      = "success upload image";

                    resize_image($pic,'thumb', $path);
                    resize_image($pic,'medium', $path);
                    resize_image($pic,'large', $path);  
                } 
                else 
                {
                    $data['status'][]   = 'danger';
                    $data['msg'][]      = "error upload image";
                }
            }       
            
        }
        return $data;
    }

	function resize_image($pic, $type, $path = './uploads/')
    {
    	$CI =& get_instance();
    	$CI->load->library('image_lib');

    	$size   = $CI->config->item('cdn_'.$type);
        $config['image_library'] 	= 'gd2';
        $config['source_image'] 	= $pic['data']['full_path'];
        $config['new_image'] 		= $pic['data']['file_path'].$type.'_'.$pic['data']['file_name'];
        $config['maintain_ratio'] 	= $size['crop'];
        $config['width'] 			= $size['width'];
        $config['height'] 			= $size['height'];
        $config['overwrite']		= TRUE;
       
        $CI->image_lib->clear();
       	$CI->image_lib->initialize($config);
       	$CI->image_lib->resize();
    }

    function generate_slug($text)
    {
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, '-');
        $text = preg_replace('~-+~', '-', $text);
        $text = str_replace(',', '', $text);
        $text = str_replace('&', '', $text);
        $text = str_replace('.', '', $text);
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
   