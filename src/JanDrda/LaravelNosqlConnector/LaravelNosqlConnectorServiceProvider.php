<?php
/**
 * Service provider
 * 
 * Register the service and return right connector based on configuration
 * 
 * @category ServiceConnector
 * @package LaravelNosqlConnector
 * @author Jan Drda <jdrda@outlook.com>
 * @copyright Jan Drda
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace JanDrda\LaravelNosqlConnector;

use Illuminate\Support\ServiceProvider;

class LaravelNosqlConnectorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Publish configuration
         */
        $this->publishes([
        __DIR__.'/config/laravel-nosql-connector.php' => config_path('laravel-nosql-connector.php'),
        ]);
        
        /**
         * Publish migrations
         */
        $this->publishes([
            __DIR__.'/migrations/' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Create singleton instance of the service and return object based on config
         */
        $this->app->singleton('LaravelNosqlConnector', function ($app) {
            
            /**
             * Database - system database based on DB facade
             */
            if(config('laravel-nosql-connector.default') == 'database'){
                
                return new DatabaseConnector();
            }
            
            /**
             * Filesystem - based on Storage facade
             */
            elseif(config('laravel-nosql-connector.default') == 'storage'){
                
                return new StorageConnector();
            }
            
            /**
             * MongoLite - based on https://github.com/aheinze/mongo-lite
             */
            elseif(config('laravel-nosql-connector.default') == 'mongolite'){
                
                return new MongoLiteConnector();
            }
            
            /**
             * DynamoDB - based on https://github.com/baopham/laravel-dynamodb for Amazon DynamoDB
             */
            elseif(config('laravel-nosql-connector.default') == 'dynamodb'){
                
                return new DynamoDbConnector();
            }
            
            /**
             * Bad configuration
             */
            else{
                
                return false;
            }
        });
    }
}
