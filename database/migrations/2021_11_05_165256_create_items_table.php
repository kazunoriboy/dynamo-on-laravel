<?php

use Illuminate\Database\Migrations\Migration;
use BaoPham\DynamoDb\DynamoDbClientService;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $params = [
            'TableName' => 'items',
            'KeySchema' => [
                [
                    'AttributeName' => 'id',
                    'KeyType' => 'HASH',
                ],
                [
                    'AttributeName' => 'release_date',
                    'KeyType' => 'RANGE',
                ],
            ],
            'AttributeDefinitions' => [
                [
                    'AttributeName' => 'id',
                    'AttributeType' => 'N'
                ],
                [
                    'AttributeName' => 'release_date',
                    'AttributeType' => 'S'
                ],
            ],
            'ProvisionedThroughput' => [
                'ReadCapacityUnits' => 5,
                'WriteCapacityUnits' => 5,
            ],
        ];

        resolve(DynamoDbClientService::class)->getClient()->createTable($params);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $params = [
            'TableName' => 'items',
        ];

        resolve(DynamoDbClientService::class)->getClient()->deleteTable($params);
    }
}
