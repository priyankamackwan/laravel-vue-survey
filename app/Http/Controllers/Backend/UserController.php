<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Session;

class UserController extends Controller
{
     /*
    * USER MODULE LIST
    */

    public function index(Request $request)
    {
        $data = User::paginate(10);
        if ($request->ajax()) {
            return DataTables::of(User::select('*')->orderBy("id","desc"))
                ->addIndexColumn()
                ->addColumn('name', function($row){
                    return $row->first_name.' '.$row->last_name;
                })
                ->addColumn('action', function ($row) {

                    $btn = "<a href='".route('admin.user.edit',$row->id)."' class='edit btn btn-primary btn-sm'><i class='fas fa-fw fa-edit fa-lg'></i></a>";
                    $btn .= " <a href='".route('admin.user.destroy',$row->id)."' class='edit btn btn-danger btn-sm delete'><i class='fas fa-fw fa-trash fa-lg'></i></a>";
                    $btn .= " <a href='".route('admin.user.show',$row->id)."' class='edit btn btn-info btn-sm'><i class='fas fa-fw fa-eye fa-lg'></i></a>";

                    return $btn;
                })
                ->rawColumns(['action','name'])
                ->make(true);     
        }
        return view('backend.user.index');
    }

     /*
    * USER MODULE CREATE
    */

    public function create()
    {
        return view('backend.user.create');
    }

     /*
    * USER MODULE STORE
    */

    public function store(Request $request)
    {

        $validationArr = [
            "first_name"        => 'required',
            "last_name"         => 'required',
            "email"             => 'required|email|unique:users,email',
        ];

        $validator = Validator::make($request->all(), $validationArr);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
      

        $data = $request->all();

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/');
            $image->move($destinationPath, $name);  
            $data['profile_image'] = $name;
        }


        $data['password'] = \Hash::make(rand(10,1000));
        $user = User::create($data);

        return redirect()->route('admin.user.index');
    }

      /*
    * USER MODULE EDIT
    */ 

    public function edit(User $user)
    {
        return view('backend.user.edit', compact('user'));
    }

     /*
    * USER MODULE UPDATE
    */

    public function update(Request $request, User $user)
    {
        $validationArr = [
            "first_name"        => 'required',
            "last_name"         => 'required',
            "email"             => 'required|email|unique:users,email,'.$user->id,
        ];

        $validator = Validator::make($request->all(), $validationArr);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
      

        $data = $request->all();

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/');
            $image->move($destinationPath, $name);  
            $data['profile_image'] = $name;
        }
        

        $user->update($data);

        return redirect()->route('admin.user.index');
    }

     /*
    * USER MODULE PROFILE VIEW
    */

    public function show(User $user)
    {
        return view('backend.user.show', compact('user'));
    }

     /*
    * USER MODULE DELETE
    */

    public function destroy(User $user)
    {
        $user->delete();

        Session::flash('message', 'Record has been delete successfully!');

        return response()->json([
            'success' => true,
            'message' => 'Record deleted successfully!'
        ]);
    }

   
}
