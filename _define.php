<?php
/**
 * @brief ???, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Franck Paul and contributors
 *
 * @copyright Franck Paul carnet.franck.paul@gmail.com
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('DC_RC_PATH')) {return;}

$this->registerModule(
    "??????????",                                           // Name
    "????????????????????????????????????????????????????", // Description
    "Franck Paul and contributors",                         // Author
    '0.1',                                                  // Version
    [
        'requires'    => [['core', '2.16']],
        'permissions' => 'usage,contentadmin',                        // Permissions
        'type'        => 'plugin',                                    // Type
        'priority'    => 1000,                                        // Priority
        'support'     => 'https://github.com/franck-paul/??????????', // Support URL
        'details'     => 'https://open-time.net/?q=????????????????', // Details
        'settings'    => [                                            // Settings
            'self' => '',
            'blog' => '#params.????????',
            'pref' => '#user-options.????????'
        ]
    ]
);
