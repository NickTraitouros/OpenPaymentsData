First add appropriate DB credentials to database/db_config.php

run these commands:

php database/ddl_setup.php
php scraper.php (Waiting for the scraper to finish is unnecessary)
php -S 0.0.0.0:1234

then browse to http://0.0.0.0:1234
