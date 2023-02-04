<?php
namespace App\Filters;
use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class TipsFilter extends ApiFilter{
    protected $safeParms = [
        'id' => ['eq','neq','lt','lte','gt','gte'],
        'title' => ['eq','neq'],
        'description' => ['eq','neq'],
        'content' => ['eq','neq'],
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