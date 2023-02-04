<?php

namespace App\Http\Controllers\API;

use App\Filters\TipsFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTipRequest;
use App\Http\Requests\UpdateTipRequest;
use App\Http\Resources\TipCollection;
use App\Http\Resources\TipResource;
use App\Models\Tip;
use Illuminate\Http\Request;

class TipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new TipsFilter();
        $queryItems = $filter->transform($request);
        if(count($queryItems) == 0){
            return new TipCollection(Tip::paginate());
        }else{
            return new TipCollection(Tip::where($queryItems)->paginate());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function show(Tip $tip)
    {
        return new TipResource($tip);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function edit(Tip $tip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipRequest  $request
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipRequest $request, Tip $tip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tip $tip)
    {
        //
    }
}
