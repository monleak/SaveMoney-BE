<?php
namespace App\Filters;
use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class CategoriesFilter extends ApiFilter{
    protected $safeParms = [
        'id' => ['eq','neq','lt','lte','gt','gte'],
        'userID' => ['eq','neq','lt','lte','gt','gte'],
        'privacy' => ['eq','neq'],
        'type' => ['eq','neq'],
        'name' => ['eq','neq'],
    ];

    
    protected $columnMap = [
        'userID' => 'user_id',
    ];
    protected $operatorMap = [
        'eq' => '=',
        'neq' => '!=',
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '<=',
    ];

}