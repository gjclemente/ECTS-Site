    <?php
        $DB_SERVER = 'jklins-1.cret6wgx6skt.us-east-2.rds.amazonaws.com';
        $DB_NAME   = 'GaClemente';
        $DB_USERNAME = 'GaClemente';
        $DB_PASSWORD = 'Ects0909';
        $charset = 'utf8mb4';


        $dsn = "mysql:host=$DB_SERVER;dbname=$DB_NAME;charset=$charset";


        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];


        try {
             $link = new PDO($dsn, $DB_USERNAME, $DB_PASSWORD, $options);
        } catch (\PDOException $e) {
             throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    ?>