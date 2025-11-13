<?php

use Hanafalah\ModuleLicense\{
    Models as ModuleLicense,
    Contracts
};

return [
    'namespace' => 'Hanafalah\ModuleLicense',
    'app' => [
        'contracts' => [
            //ADD YOUR CONTRACTS HERE
        ]
    ],
    'libs'       => [
        'model' => 'Models',
        'contract' => 'Contracts',
        'schema' => 'Schemas',
        'database' => 'Database',
        'data' => 'Data',
        'resource' => 'Resources',
        'migration' => '../assets/database/migrations'
    ],
    'database'  => [
        'models' => [
        ]
    ]
];
