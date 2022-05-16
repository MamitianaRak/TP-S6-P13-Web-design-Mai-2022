<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if(!function_exists('img_loader'))
	{
		function img_loader($name)
		{
			return base_url()."assets/img/".$name;
		}
	}


	if(!function_exists('v_loader'))
	{
		function v_loader($name)
		{
			return base_url()."assets/vendor/".$name;
		}
	}

	if(!function_exists('css_loader'))
	{
		function css_loader($name)
		{
			return base_url()."assets/css/".$name;
		}
	}

	if(!function_exists('bootstrapcss_loader'))
	{
		function bootstrapcss_loader($name)
		{
			return base_url()."assets/bootstrap/css/".$name;
		}
	}

	if(!function_exists('bootstrapjs_loader'))
	{
		function bootstrapjs_loader($name)
		{
			return base_url()."assets/bootstrap/js/".$name;
		}
	}

	if(!function_exists('js_loader'))
	{
		function js_loader($name)
		{
			return base_url()."assets/js/".$name;
		}
	}

	if(!function_exists('font_loader'))
	{
		function font_loader($name)
		{
			return base_url()."assets/fonts/".$name;
		}
	}
	
?>