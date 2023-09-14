<?php return array(
    'root' => array(
        'name' => 'fullworks/stop-wp-emails-going-to-spam',
        'pretty_version' => '2.0.6.x-dev',
        'version' => '2.0.6.9999999-dev',
        'reference' => 'e3484b2ed2160d726914ecbb5f9550fabcc73def',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'alanef/plugindonation_lib' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'b1fec29bbe5575c3ad8a87a6db7626dee1042a44',
            'type' => 'library',
            'install_path' => __DIR__ . '/../alanef/plugindonation_lib',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'composer/installers' => array(
            'pretty_version' => 'v1.0.12',
            'version' => '1.0.12.0',
            'reference' => '4127333b03e8b4c08d081958548aae5419d1a2fa',
            'type' => 'composer-installer',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'fullworks/stop-wp-emails-going-to-spam' => array(
            'pretty_version' => '2.0.6.x-dev',
            'version' => '2.0.6.9999999-dev',
            'reference' => 'e3484b2ed2160d726914ecbb5f9550fabcc73def',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'squizlabs/php_codesniffer' => array(
            'pretty_version' => '3.7.2',
            'version' => '3.7.2.0',
            'reference' => 'ed8e00df0a83aa96acf703f8c2979ff33341f879',
            'type' => 'library',
            'install_path' => __DIR__ . '/../squizlabs/php_codesniffer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wp-coding-standards/wpcs' => array(
            'pretty_version' => '2.3.0',
            'version' => '2.3.0.0',
            'reference' => '7da1894633f168fe244afc6de00d141f27517b62',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../wp-coding-standards/wpcs',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
