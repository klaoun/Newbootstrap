# Newbootstrap
{combine_script id='popper.js' require='jquery' path='themes/newbootstrap_darkroom/node_modules/popper.js/dist/umd/popper.min.js' load=$loc}
{if preg_match('/^material/', $theme_config->bootstrap_theme)}
    {combine_script id='bootstrap' require='popper.js' path='themes/newbootstrap_darkroom/node_modules/bootstrap-material-design/dist/js/bootstrap-material-design.min.js' load=$loc}
{else}
    {combine_script id='bootstrap' require='popper.js' path='themes/newbootstrap_darkroom/node_modules/bootstrap/dist/js/bootstrap.min.js' load=$loc}
{/if}
{combine_script id=$themeconf.name require='bootstrap' path='themes/newbootstrap_darkroom/js/theme.js' load='footer'}



        $this->files[self::KEY_CUSTOM_CSS] = PHPWG_ROOT_PATH . PWG_LOCAL_DIR . 'newbootstrap_darkroom/custom.css';
