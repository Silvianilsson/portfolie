<?php

function apache_get_modules()
{
        $modules = array(
                "core",
                "mpm_worker",
                "mod_http",
                "mod_so",
                "mod_auth_basic",
                "mod_auth_digest",
                "mod_authn_file",
                "mod_authn_alias",
                "mod_authn_anon",
                "mod_authn_dbm",
                "mod_authn_default",
                "mod_authz_host",
                "mod_authz_user",
                "mod_authz_owner",
                "mod_authz_groupfile",
                "mod_authz_dbm",
                "mod_authz_default",
                "mod_ldap",
                "mod_authnz_ldap",
                "mod_include",
                "mod_log_config",
                "mod_logio",
                "mod_env",
                "mod_ext_filter",
                "mod_mime_magic",
                "mod_expires",
                "mod_deflate",
                "mod_headers",
                "mod_usertrack",
                "mod_setenvif",
                "mod_mime",
                "mod_dav",
                "mod_status",
                "mod_autoindex",
                "mod_info",
                "mod_dav_fs",
                "mod_vhost_alias",
                "mod_negotiation",
                "mod_dir",
                "mod_actions",
                "mod_speling",
                "mod_userdir",
                "mod_alias",
                "mod_rewrite",
                "mod_proxy",
                "mod_proxy_balancer",
                "mod_proxy_ftp",
                "mod_proxy_http",
                "mod_proxy_connect",
                "mod_cache",
                "mod_suexec",
                "mod_disk_cache",
                "mod_file_cache",
                "mod_mem_cache",
                "mod_cgi",
                "mod_version",
                "mod_fcgid",
                "mod_hostinglimits",
                "mod_h264_streaming",
                "mod_pagespeed",
                "mod_proxy_ajp");

        return $modules;
}

function binero_check_bad_request()
{
  if(strpos($_SERVER['HTTP_USER_AGENT'], 'BOT for JCE') !== false)
  {
    binero_block_bad_request('User-Agent: '.$_SERVER['HTTP_USER_AGENT']);
  }

  if(substr($_SERVER['SCRIPT_NAME'],-28)=='/templates/system/online.php'||substr($_SERVER['SCRIPT_NAME'],-29)=='/templates/system/onlines.php')
  {
    binero_block_bad_request('Path: '.$_SERVER['SCRIPT_NAME']);
  }

  if(preg_match('/\/images\/stories\/(.*)\.php$/',$_SERVER['SCRIPT_NAME']))
  {
    binero_block_bad_request('Path: '.$_SERVER['SCRIPT_NAME']);
  }

  if(isset($_GET['option'])&&$_GET['option']=='com_user'&&isset($_POST['token'])&&$_POST['token']=="'")
  {
    binero_block_bad_request('Detected Joomla exploit');
  }

  if(isset($_POST['comment'])&&strpos($_SERVER['SCRIPT_NAME'], 'wp-comments-post.php') !== false&&preg_match('/<!âunc(.*)â!âmfuncâ',$_POST['comment']))
  {
    binero_block_bad_request('Detected WP cache exploit');
  }

  if(isset($_GET['src'])&&substr($_GET['src'],0,4)=='http'&&substr($_SERVER['SCRIPT_NAME'], 9) == 'thumb.php')
  {
    if(preg_match('/http:\/\/([a-z0-9\.\-]*)(youtube|flickr|picasa|blogger|wordpress)\.com\.([a-z0-9\.\-]+)/',$_GET['src']))
    {
      binero_block_bad_request('Detected TimThumb exploit');
    }
  }
}

function binero_block_bad_request($reason)
{
       ini_set('display_errors', '0');
       trigger_error('Request from '.$_SERVER['REMOTE_ADDR'].' blocked ('.$reason.'), contact support@binero.se if you think this was done in error');
       header($_SERVER['SERVER_PROTOCOL'] . ' 451 Unavailable For Legal Reasons', true, 451);
       ?><!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>451 Unavailable For Legal Reasons</title>
</head><body>
<h1>451 Unavailable For Legal Reasons</h1>
<p>The server was unable to complete your request.</p>
<p>Please contact the server administrator,
 root@localhost and inform them of the time the error occurred,
and anything you might have done that may have
caused the error.</p>
<p>More information about this error may be available
in the server error log.</p>
</body></html><?php
        die();
}

if(isset($_SERVER['HTTP_HTTPS'])){
        $_SERVER['HTTPS'] = $_SERVER['HTTP_HTTPS'];
}

if(isset($_SERVER['HTTP_REMOTE_ADDR'])){
        $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_REMOTE_ADDR'];
}

binero_check_bad_request();

?>
