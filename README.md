# Newbootstrap
{combine_script id='cookie' require='jquery' path='themes/newbootstrap_darkroom/js/jquery.cookie.js' load='footer'}
{combine_script id='equalheights' require='jquery' path='themes/newbootstrap_darkroom/js/jquery.equalheights.js' load='footer'}
{if get_device() != 'desktop'}
{combine_script id='jquery.mobile-events' path='themes/newbootstrap_darkroom/node_modules/jQuery-Touch-Events/src/jquery.mobile-events.min.js'


 <link rel="shortcut icon" type="image/x-icon" href="{$ROOT_URL}{$themeconf.icon_dir}/favicon.ico">
    <link rel="icon" sizes="192x192" href="{$ROOT_URL}themes/bootstrap_darkroom/img/logo.png">
    <link rel="apple-touch-icon" sizes="192x192" href="{$ROOT_URL}themes/bootstrap_darkroom/img/logo.png">
    <link rel="start" title="{'Home'|@translate}" href="{$U_HOME}" >
    <link rel="search" title="{'Search'|@translate}" href="{$ROOT_URL}search.php">
{if isset($first.U_IMG)}
    <link rel="first" title="{'First'|@translate}" href="{$first.U_IMG}">
{/if}
{if isset($previous.U_IMG)}
    <link rel="prev" title="{'Previous'|@translate}" href="{$previous.U_IMG}">
{/if}
{if isset($next.U_IMG)}
    <link rel="next" title="{'Next'|@translate}" href="{$next.U_IMG}">
{/if}
{if isset($last.U_IMG)}
    <link rel="last" title="{'Last'|@translate}" href="{$last.U_IMG}">
{/if}
{if isset($U_UP)}
    <link rel="up" title="{'Thumbnails'|@translate}" href="{$U_UP}">
{/if}
{if isset($U_PREFETCH)}
    <link rel="prefetch" href="{$U_PREFETCH}">
{/if}
{if isset($U_CANONICAL)}
    <link rel="canonical" href="{$U_CANONICAL}">
{/if}
{if not empty($page_refresh)}
    <meta http-equiv="refresh" content="{$page_refresh.TIME};url={$page_refresh.U_REFRESH}">
{/if}

{strip}
{if $theme_config->bootstrap_theme}
    {combine_css path="themes/newbootstrap_darkroom/css/{$theme_config->bootstrap_theme}/bootstrap.min.css" order=-20}
{else}
    {combine_css path="themes/newbootstrap_darkroom/css/bootstrap-default/bootstrap.min.css" order=-20}
{/if}
{if $theme_config->bootstrap_theme == 'bootstrap-darkroom' || $theme_config->bootstrap_theme == 'material-darkroom'}
    {combine_css path="themes/newbootstrap_darkroom/node_modules/typeface-pt-sans/index.css" order=-19}
{elseif (0 === strpos($theme_config->bootstrap_theme, 'material')) || $theme_config->bootstrap_theme == 'bootstrap-default'}
    {combine_css path="themes/newbootstrap_darkroom/node_modules/typeface-roboto/index.css" order=-19}
{/if}
    {combine_css path='themes/newbootstrap_darkroom/node_modules/@fortawesome/fontawesome-free/css/all.min.css' order=-14}
    {combine_css path='themes/newbootstrap_darkroom/assets/photography-icons/css/PhotographyIcons.css' order=-13}
    {combine_css path='themes/newbootstrap_darkroom/node_modules/bootstrap-social/bootstrap-social.css' order=-12}
{foreach from=$themes item=theme}
{if $theme.load_css}
    {combine_css path="themes/`$theme.id`/theme.css" order=-10}
{/if}
{if !empty($theme.local_head)}{include file=$theme.local_head load_css=$theme.load_css}{/if}
{/foreach}
{if file_exists("local/newbootstrap_darkroom/custom.css")}
    {combine_css path="local/newbootstrap_darkroom/custom.css" order=10000}
{/if}
{get_combined_css}
{if $BODY_ID == 'theAdditionalPage' || $BODY_ID == 'theHomePage' || $bootstrap_darkroom_core_js_in_header == true }
{assign var=loc value="header"}
{else}
{assign var=loc value="footer"} 
{/if}
{combine_script id='jquery' path='themes/newbootstrap_darkroom/node_modules/jquery/dist/jquery.min.js' load=$loc}
{combine_script id='jquery-migrate' require='jquery' path='themes/newbootstrap_darkroom/node_modules/jquery-migrate/dist/jquery-migrate.min.js' load=$loc}
{combine_script id='jquery.ajaxmanager' require='jquery' path='themes/default/js/plugins/jquery.ajaxmanager.js' load='footer'}
{combine_script id='thumbnails.loader' require='jquery.ajaxmanager' path='themes/default/js/thumbnails.loader.js' load='footer'}
{combine_script id='popper.js' require='jquery' path='themes/newbootstrap_darkroom/node_modules/popper.js/dist/umd/popper.min.js' load=$loc}
{if preg_match('/^material/', $theme_config->bootstrap_theme)}
    {combine_script id='bootstrap' require='popper.js' path='themes/newbootstrap_darkroom/node_modules/bootstrap-material-design/dist/js/bootstrap-material-design.min.js' load=$loc}
{else}
    {combine_script id='bootstrap' require='popper.js' path='themes/newbootstrap_darkroom/node_modules/bootstrap/dist/js/bootstrap.min.js' load=$loc}
{/if}
{combine_script id=$themeconf.name require='bootstrap' path='themes/newbootstrap_darkroom/js/theme.js' load='footer'}
