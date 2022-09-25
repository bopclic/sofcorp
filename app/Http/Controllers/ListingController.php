<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $listings = Listing::latest()->filter(request(['tag','search']))->get();
        // $listings = Listing::latest()->filter(request(['tag','search']))->paginate(5);
        $listings = Listing::latest()->filter(request(['tag','search']))->simplePaginate(6);
        return view('listings.index', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listings/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'company'=> ['required', Rule::unique('listings', 'company')],
                'email'=> ['required', 'email'],
                'tags'=> 'required',
                'website'=> 'required',
                'location'=> 'required',
                'tags'=> 'required',
                'description'=> 'required'
            ]
        );

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store
            ('logos', 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::find($id);
        if($listing){
        return view('listings.show',compact('listing'));
        }else{
            abort('404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('listings.edit', compact('listing'));
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
        $listing = Listing::find($id);
        $formFields = $request->validate(
            [
            'company'=> 'required',
            'email'=> ['required', 'email'],
            'tags'=> 'required',
            'website'=> 'required',
            'location'=> 'required',
            'tags'=> 'required',
            'description'=> 'required'
        ]
    );

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store
            ('logos', 'public');
        }

        $listing->update($formFields);

        return redirect('/')->with('message', 'Listing updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Listing::find($id)->delete();
        return redirect('/')->with('message', 'Listing deleted successfully!');
    }
}
