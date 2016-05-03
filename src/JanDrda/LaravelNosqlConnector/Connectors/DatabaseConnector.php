<?php
/**
 * Database connector
 * 
 * Provides connection to Database service as NoSQL emulation on SQL
 * 
 * @category Connector
 * @package LaravelNosqlConnector
 * @author Jan Drda <jdrda@outlook.com>
 * @copyright Jan Drda
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace JanDrda\LaravelNosqlConnector;

class DatabaseConnector {
    
    /**
     * Get name of the connector
     * 
     * @return string
     */
    public function getName(){
        return 'Database';
    }
}
