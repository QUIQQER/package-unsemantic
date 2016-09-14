<?php

/**
 * This file contains QUI\Unsemantic\EventHandler
 */
namespace QUI\Unsemantic;

use QUI;

/**
 * Class EventHandler
 * @package QUI\Unsemantic
 */
class EventHandler
{
    /**
     * Event : on smarty init
     * @param \Smarty $Smarty - \Smarty
     */
    public static function onSmartyInit($Smarty)
    {
        // {unsemantic}
        if (!isset($Smarty->registered_plugins['function']) ||
            !isset($Smarty->registered_plugins['function']['unsemantic'])
        ) {
            $Smarty->registerPlugin(
                "function",
                "unsemantic",
                "\\QUI\\Unsemantic\\EventHandler::unsemantic"
            );
        }
    }

    /**
     * Smarty brickarea function {brickarea}
     *
     * @param array $params - function parameter
     * @param \Smarty $smarty - \Smarty
     * @return array|String
    t */
    public static function unsemantic($params, $smarty)
    {
        return '<link href="' . URL_OPT_DIR . 'bin/unsemantic/assets/stylesheets/unsemantic-grid-responsive.css"
          rel="stylesheet"
          type="text/css"
               />
               <link href="' . URL_OPT_DIR . 'quiqqer/unsemantic/bin/cutstom.css"
          rel="stylesheet"
          type="text/css" />';
    }
}
