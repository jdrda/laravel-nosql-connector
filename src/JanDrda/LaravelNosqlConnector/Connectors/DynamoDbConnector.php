<?php
/**
 * DynamoDB connector
 * 
 * Provides connection to DynamoDB database
 * 
 * DynamoDB URL:
 * https://aws.amazon.com/dynamodb
 * 
 * DynamoDB Laravel connector used:
 * https://github.com/baopham/laravel-dynamodb
 * 
 * @category Connector
 * @package LaravelNosqlConnector
 * @author Jan Drda <jdrda@outlook.com>
 * @copyright Jan Drda
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace JanDrda\LaravelNosqlConnector;

class DynamoDbConnector {
    
    /**
     * Get name of the connector
     * 
     * @return string
     */
    public function getName(){
        return 'DynamoDb';
    }
}
