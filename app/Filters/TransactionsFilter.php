<?php
namespace App\Filters;
use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class TransactionsFilter extends ApiFilter{
    protected $safeParms = [
        'id' => ['eq','neq','lt','lte','gt','gte'],
        'wallet_id' => ['eq','neq','lt','lte','gt','gte'],
        'category_id' => ['eq','neq','lt','lte','gt','gte'],
        'name' => ['eq','neq'],
        'value' => ['eq','neq','lt','lte','gt','gte'],
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