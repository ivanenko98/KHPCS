<?php

namespace App\Http\Controllers;

use App\Block;
use App\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Block::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Block $block, Survey $survey)
    {
         if(Auth::user()->role_id == 2) {
             $block = $survey->block()->create($request->all());
             return response()->json($block, 201);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Block $block)
    {
        return $block;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Block $block, Survey $survey)
    {
        if(Auth::user()->role_id == 2) {
            $block->update($request->all());
            return response()->json($block, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block $block)
    {
        if(Auth::user()->role_id == 2) {
            $block->delete();
            return response()->json(null, 204);
        }
    }
}