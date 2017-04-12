<?php

return [

    // Change the paths, so they fit your needs

    'path_to_env'         =>  base_path() . '/.env',
    'backup_path'        =>  base_path() . '/storage/backups/dotenv-editor/', // Make sure, you have a "/" at the end
    'auto_backup'       => true,

    // Activate or deactivate the graphical interface
    'activated'         => true,

    // Set the base-route. All requests start here
    'route'             =>  '/env-editor',

    // middleware and middlewaregroups. Add your own middleware if you want.
    'middleware'        => ['web'],
    'middleware_groups'  => []
];
