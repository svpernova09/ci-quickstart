<?php namespace App\Models;

use CodeIgniter\Model;

class WidgetModel extends Model
{
    protected $table = 'widgets';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = [
        'title',
        'description',
        'price'
    ];
}

