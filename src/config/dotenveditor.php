<?php

return [

    // Change the paths, so they fit your needs

    'pathToEnv'         =>  base_path() . '/.env',
    'backupPath'        =>  base_path() . '/storage/backups/dotenv-editor/', // Make sure, you have a "/" at the end


    // Activate or deactivate the graphical interface
    'activated'         => true,

    // Set the base-route. All requests start here
    'route'             =>  '/env-editor',

    // middleware and middlewaregroups. Add your own middleware if you want.
    'middleware'        => ['web'],
    'middlewareGroups'  => []
];
