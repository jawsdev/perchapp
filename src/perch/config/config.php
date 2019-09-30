<?php
    define('PERCH_LICENSE_KEY', 'P3-LOCAL-NBN190-RAQ929-XSQ014');

    define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", '');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "perch");
    define("PERCH_DB_PREFIX", "perch3_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'john@weeksj.uk');
    define('PERCH_EMAIL_FROM_NAME', 'j w');

    define('PERCH_LOGINPATH', '/perchapp/src/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
