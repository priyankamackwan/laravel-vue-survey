<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserDetail::all();
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required|integer',
            'email' => 'required|email',
            'postalcode' => 'required|integer',
            'education' => 'required',
            'country' => 'required'
        ]);

        try {
            $userDetail = new UserDetail;
            $userDetail->name = $request->name;
            $userDetail->surname = $request->surname;
            $userDetail->email = $request->email;
            $userDetail->mobile = $request->mobile;
            $userDetail->addr_1 = $request->addr_1;
            $userDetail->addr_2 = $request->addr_2;
            $userDetail->postal_code = $request->postalcode;
            $userDetail->state = $request->state;
            $userDetail->area = $request->area;
            $userDetail->education = $request->education;
            $userDetail->state = $request->state;
            $userDetail->gender = $request->gender;
            $userDetail->country = $request->country;
            $userDetail->region = $request->region;
            $userDetail->experience_design = $request->experience;
            $userDetail->additional_detail = $request->additional_detail;
            $userDetail->save();

            return response()->json([
                'success' => true,
                'message' => 'User Detail saved'
            ]);
    
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetail $userDetail)
    {
        return $userDetail;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDetail $userDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDetail $userDetail)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required|integer',
            'email' => 'required|email',
            'postalcode' => 'required|integer',
            'education' => 'required',
            'country' => 'required'
        ]);

        try {
            $userDetail->name = $request->name;
            $userDetail->surname = $request->surname;
            $userDetail->email = $request->email;
            $userDetail->mobile = $request->mobile;
            $userDetail->addr_1 = $request->addr_1;
            $userDetail->addr_2 = $request->addr_2;
            $userDetail->postal_code = $request->postalcode;
            $userDetail->state = $request->state;
            $userDetail->area = $request->area;
            $userDetail->education = $request->education;
            $userDetail->state = $request->state;
            $userDetail->gender = $request->gender;
            $userDetail->country = $request->country;
            $userDetail->region = $request->region;
            $userDetail->experience_design = $request->experience;
            $userDetail->additional_detail = $request->additional_detail;
            $userDetail->save();

            return response()->json([
                'success' => true,
                'message' => 'User Detail updated'
            ]);
    
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetail $userDetail)
    {
        $userDetail->delete();
        return response('Deleted', 204);
    }
}
