<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class userEdit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {}
    

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user_views.userSettings.userProfileSetting');
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

        /*   if ($request->input('slug') == $post->slug) {
            $this->validate($request,array(
                 'title' => 'required|max:255',
                'category_id' => 'required|integer',
                'body' => 'required'
            ));
        }else {
             $this->validate($request,array(
                 'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|max:255|min:5|unique:user_posts,slug',
                'category_id' => 'required|integer',
                'body' => 'required'
            ));
    }*/

        $this->validate($request, array(
            'bio' => 'required|max:100',
            // 'compony' => 'required|max:30',
            'location' => 'required|max:30',
            'url' => 'required',
        ));

        if ($request->n_name != null) {
            $this->validate($request, array(
                'n_name' => 'required',
            ));

            auth::user()->n_name = $request->n_name;
        }
        if ($request->input('bio') == null) {
            auth::user()->bio = 'none';
        } else {
            auth::user()->bio = $request->input('bio');
        }
        /*--------------*/
        if ($request->input('company') == null) {
            auth::user()->company = 'none';
        } else {
            auth::user()->company = $request->input('company');
        }
        /*--------------*/
        if ($request->input('location') == null) {
            auth::user()->location = 'none';
        } else {
            auth::user()->location = $request->input('location');
        }
        /*--------------*/
        if ($request->input('url') == null) {
            auth::user()->url = 'none';
        } else {
            auth::user()->url = $request->input('url');
        }

        auth::user()->save();


        Session::flash('success', "The profile is updated!");

        return redirect()->route('home2');
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
