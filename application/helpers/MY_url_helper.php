<<<<<<< HEAD
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if ( ! function_exists('site_url'))
{
    function site_url($uri = '')
    {       
        if( ! is_array($uri))
        {
            //  Tous les paramètres sont insérés dans un tableau
            $uri = func_get_args();
        }
     
        //  On ne modifie rien ici
        $CI =& get_instance();  
        return $CI->config->site_url($uri);
    }
}
 
// ------------------------------------------------------------------------
 
if ( ! function_exists('url'))
{
    function url($text, $uri = '')
    {
        if( ! is_array($uri))
        {
            //  Suppression de la variable $text
            $uri = func_get_args();
            array_shift($uri);
        }
     
        echo '<a href="' . site_url($uri) . '">' . htmlentities($text) . '</a>';
        return '';
    }
}

?>
=======
<?php
/*
 * URL helpers, this file extends
 * the current URL helper that
 * CodeIgniter includes.
*/

/**
 * base_url
 *
 * This function OVERRIDES the current
 * CodeIgniter base_url function to support
 * CDN'ized content.
 */
function base_url($uri = null)
{
   $CI =& get_instance();

   $cdn = $CI->config->item('cdn_url');
   if (!empty($cdn))
      return $cdn . $uri;

   return $CI->config->base_url($uri);
}

/*
 * is_active
 * Allows a string input that is
 * delimited with "/". If the current
 * params contain what is currently
 * being viewed, it will return true
 *
 * This function is order sensitive.
 * If the page is /view/lab/1 and you put
 * lab/view, this will return false. 
 *
 * @author sjlu
 */
function is_active($input_params = "")
{
   // uri_string is a CodeIgniter function
   $uri_string = uri_string();

   // direct matching, faster than looping.
   if ($uri_string == $input_params)
      return true;
      
   $uri_params = preg_split("/\//", $uri_string);
   $input_params = preg_split("/\//", $input_params);

   $prev_key = -1;
   foreach ($input_params as $param)
   {
      $curr_key = array_search($param, $uri_params);

      // if it doesn't exist, return null
      if ($curr_key === FALSE)
         return false;

      // this makes us order sensitive
      if ($curr_key < $prev_key)
         return false;

      $prev_key = $curr_key;
   }

   return true;
}
>>>>>>> branch 'cdn' of https://github.com/sjlu/CodeIgniter-Bootstrap.git
