<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\EmployeesModel;
use Illuminate\Support\Facades\Hash;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('addemployee');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation applied
        $request->validate([
            "firstname"=>"required",
            "lastname"=>"required",
            "gender"=>"required",
            "email"=>"required|email",
            "password"=>"required",
            "mobile"=>"required|min:10|max:10",
            "address"=>"required"
        ]);

        $data=array(
            "firstname"=>$request->firstname,
            "lastname"=>$request->lastname,
            "gender"=>$request->gender,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            "mobile"=>$request->mobile,
            "address"=>$request->address
        );

        EmployeesModel::create($data);
        // return view('addemployee');
        return redirect('/addemployee')->with('success','Employee Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data=EmployeesModel::all();
        return view('viewemployee',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ed=EmployeesModel::where('id',$id)->first();
        return view('editemployee',["ed"=>$ed]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ed=array(
            "firstname"=>$request->firstname,
            "lastname"=>$request->lastname,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            "mobile"=>$request->mobile,
            "address"=>$request->address
        );

        EmployeesModel::where('id',$id)->update($ed);
        return redirect('/viewemployee')->with('upd','Employee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        EmployeesModel::where('id',$id)->delete();
        return redirect('/viewemployee')->with('del','Employee Deleted Successfully');
    }
}
