<?php

namespace App\Models;

use Baopham\DynamoDb\DynamoDbModel as Model;

class Item extends Model
{
    protected $table = 'items';

    protected $primaryKey = 'id';

    protected $compositeKey = ['id', 'release_date'];

    public $timestamps = false;

    protected $fillable = [
        'id',
        'release_year',
    ];
}
