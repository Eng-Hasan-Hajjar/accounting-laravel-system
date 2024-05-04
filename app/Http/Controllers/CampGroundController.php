<?php

namespace App\Http\Controllers;

use App\Models\CampGround;
use Illuminate\Http\Request;
use app\Models\User;

class CampGroundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campGrounds = CampGround::latest()->paginate(5);

        return view('backend.campGrounds.index', compact('campGrounds'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.campGrounds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$user=User::user();
        $request->validate([
            'name' => 'required|min:1|max:100',
            'description' => 'required',
            'country' => 'required',
            'city' => 'required',
            'region' => 'required',
            'cm_type' => 'required|integer',
            'cm_season' => 'required|integer',
            'campGround_image' => 'required|image|max:2048',
        ]);

        $image = $request->file('campGround_image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'name' => $request->name,
            'description' => $request->description,
            'country' => $request->country,
            'city' => $request->city,
            'region' => $request->region,
            'cm_type' => $request->cm_type,
            'cm_season' => $request->cm_season,

            'campGround_image'  =>  $new_name
        );

        CampGround::create($form_data);

        return redirect('/adminpanel/campground')->with('success', 'Data Added successfully.');


        $request->validate([
            'name' => 'required',

        ]);

        CampGround::create($request->all());

        return redirect()->route('backend.campGrounds.index')
            ->with('success', 'backend.campGrounds. created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CampGround $data)
    {
        return view('backend.campGrounds.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = CampGround::find($id);
        return view('backend.campGrounds.edit', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CampGround $campground)
    {
        $request->validate([
            'name' => 'required',

        ]);

        $campground->update($request->all());

        return redirect()->route('campground.index')
            ->with('success', 'campground updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CampGround $campground)
    {
        $campground->delete();

        return redirect()->route('campground.index')
            ->with('success', 'campground deleted successfully');
    }
}
