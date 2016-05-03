<?php
/**
 * Laravel NoSQL Configuration file
 * 
 * Based on standard Laravel database configuration file
 * 
 * @category Configuration
 * @package LaravelNosqlConnector
 * @author Jan Drda <jdrda@outlook.com>
 * @copyright Jan Drda
 * @license https://opensource.org/licenses/MIT MIT
 */

return [

    /**
     * Default connection type
     * 
     * Available values:
     * 
     * database - uses Laravel SQL Database library, migration needed
     * storage - uses Laravel filesystem
     * mongolite - uses MongoLite file nosql database (MongoLite has to be installed)
     * dynamodb - uses Amazon DynamoDB database (https://github.com/baopham/laravel-dynamodb has to be installed)
     * 
     */
    'default' => 'database',
   
    /**
     * Defines parameters of all connection types
     */
    'connections' => [

        'database' => [
            'table'   => 'nosql' // table which emulates NoSQL on SQL
        ],

        'storage' => [ // storage takes all values from system
        ],

        'mongolite' => [
            'database' => database_path('mongolite') // folder where mongolite database will be installed
        ],

        'dynamodb' => [ // dynamodb takes all values from system
        ],

    ],
    
];


