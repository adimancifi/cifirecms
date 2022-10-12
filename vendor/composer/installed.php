<?php return array(
    'root' => array(
        'name' => 'cifirecms/cifirecms',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'cifirecms/cifirecms' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpoption/phpoption' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpoption/phpoption',
            'aliases' => array(
                0 => '1.9.x-dev',
            ),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-ctype',
            'aliases' => array(
                0 => '1.26.x-dev',
            ),
            'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => array(
            'pretty_version' => '4.2.x-dev',
            'version' => '4.2.9999999.9999999-dev',
            'reference' => '5fd7cbfad203ea792b4737e26535528d361b2233',
            'type' => 'library',
            'install_path' => __DIR__ . '/../vlucas/phpdotenv',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
