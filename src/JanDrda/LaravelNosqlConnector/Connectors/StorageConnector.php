<?php
/**
 * Storage connector
 * 
 * Provides connection to Storage service
 * 
 * @category Connector
 * @package LaravelNosqlConnector
 * @author Jan Drda <jdrda@outlook.com>
 * @copyright Jan Drda
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace JanDrda\LaravelNosqlConnector;

class StorageConnector {
    
    /**
     * Get name of the connector
     * 
     * @return string
     */
    public function getName(){
        return 'Storage';
    }
}
