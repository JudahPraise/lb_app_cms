<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\SetQualification;
use App\Models\AddQualifications;

class SetQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $position = Position::where('id','=',$id)->first();
        // $qualifications = AddQualifications::all();
        $qualified = SetQualification::where('position_id','=',$id)->pluck('qualification_id')->all();
        $qualifications = AddQualifications::whereNotIn('id', $qualified)->get();
        return view('position.background_create', compact('position','qualifications'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $qualifications = [];

        foreach ($request->qualified_option as $item => $key) {
            $qualifications[] = ([
                'position_id' => $id,
                'qualification_id' => $request->qualification_id[$item],
                'qualified_option' => $request->qualified_option[$item],
                'point' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        SetQualification::insert($qualifications);

        return redirect()->route('setQualifcation.show', $id)->with('success', 'Qualification added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $position = Position::where('id','=',$id)->first();
        $qualified = SetQualification::where('position_id','=',$id)->with('qualification')->get();
        return view('position.background', compact('position','qualified'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
