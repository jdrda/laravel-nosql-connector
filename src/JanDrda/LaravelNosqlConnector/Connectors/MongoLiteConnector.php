<?php
/**
 * Mongolite connector
 * 
 * Provides connection to MongoLite database
 * 
 * Mongolite URL:
 * https://github.com/aheinze/mongo-lite
 * 
 * @category Connector
 * @package LaravelNosqlConnector
 * @author Jan Drda <jdrda@outlook.com>
 * @copyright Jan Drda
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace JanDrda\LaravelNosqlConnector;

class MongoLiteConnector {
    
    /**
     * Get name of the connector
     * 
     * @return string
     */
    public function getName(){
        return 'MongoLite';
    }
}
