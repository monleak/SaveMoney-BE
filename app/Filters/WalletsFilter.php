<?php
namespace App\Filters;
use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class WalletsFilter extends ApiFilter{
    protected $safeParms = [
        'id' => ['eq','neq','lt','lte','gt','gte'],
        'name' => ['eq','neq'],
        'currency_id' => ['eq','neq','lt','lte','gt','gte'],
        'user_id' => ['eq','neq','lt','lte','gt','gte'],
        'balance' => ['eq','neq','lt','lte','gt','gte'],
    ];

    
    protected $columnMap = [
        
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