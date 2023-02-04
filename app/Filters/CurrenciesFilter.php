<?php
namespace App\Filters;
use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class CurrenciesFilter extends ApiFilter{
    protected $safeParms = [
        'id' => ['eq','neq','lt','lte','gt','gte'],
        'name' => ['eq','neq'],
        'sign' => ['eq','neq'],
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