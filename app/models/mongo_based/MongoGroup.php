<?php

namespace App;

class MongoGroup extends Moloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'mongo_groups';
}
