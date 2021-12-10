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
        'requires'    => [['core', '2.20']],
        'permissions' => 'usage,contentadmin',                        // Permissions
        'type'        => 'plugin',                                    // Type
        'priority'    => 1000,                                        // Priority
        'settings'    => [                                            // Settings
            'self' => '',                       // Have a specific setting page (index.php)
            'blog' => '#params.????????',       // Have a section in blog parameters (3rd party plugins)
            'pref' => '#user-options.????????'  // Have a section in user preferences
        ],
        'support'     => 'https://github.com/franck-paul/??????????',                               // Support URL
        'details'     => 'https://open-time.net/?q=????????????????',                               // Details
        'repository'  => 'https://raw.githubusercontent.com/franck-paul/????/master/dcstore.xml',   // Alternate repository
    ]
);
