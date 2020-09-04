<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\html;
use App\documentation;
use App\employee;
use App\certification;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = employee::orderBy('created_at','desc')->paginate(3);
        return view('/employee.index')->with('employees',$employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'FirstName'=>'required',
            'LastName'=>'required',
            'email'=>'required',
            'address1'=>'required',
            'address2'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zipcode'=>'required',
            'logo'=>'image|nullable|max:1999'
        ]);
        if($request->hasFile('logo'))
        {
            //  GEt filename with extension
            $fileNameWithExt = $request->file('logo')->getClientOriginalName();
            //Get just filename
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('logo')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $fileName . '_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('logo')->storeAs('public/logos',$fileNameToStore);            
        }
        
            $employee = new employee;
            $employee->firstName=$request->input('FirstName');
            $employee->lastName=$request->input('LastName');
            $employee->email=$request->input('email');
            $employee->address1=$request->input('address1');
            $employee->address2=$request->input('address2');
            $employee->city	=$request->input('city');
            $employee->state=$request->input('state');
            $employee->zipCode=$request->input('zipcode');
            $employee->logo=$fileNameToStore; 
            $employee->save();
            return redirect('/employee/create')->with('success','Employee Added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employees = employee::find($id);
        $documents = documentation::where('employee_id',$employees['id'])->get();
        $certifications = certification::where('employee_id',$employees['id'])->get();
        return view('/employee/show')->with([
            'employees'=>$employees,
            'documents'=>$documents,
            'certifications'=>$certifications
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = employee::find($id);
        return view('/employee.edit')->with('employee',$employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'FirstName'=>'required',
            'LastName'=>'required',
            'email'=>'required',
            'address1'=>'required',
            'address2'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zipcode'=>'required',
            'logo'=>'image|nullable|max:1999'
        ]);
        if($request->hasFile('logo'))
        {
            //  GEt filename with extension
            $fileNameWithExt = $request->file('logo')->getClientOriginalName();
            //Get just filename
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('logo')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $fileName . '_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('logo')->storeAs('public/logos',$fileNameToStore);            
        }
        
            $employee = employee::find($id);
            $employee->firstName=$request->input('FirstName');
            $employee->lastName=$request->input('LastName');
            $employee->email=$request->input('email');
            $employee->address1=$request->input('address1');
            $employee->address2=$request->input('address2');
            $employee->city	=$request->input('city');
            $employee->state=$request->input('state');
            $employee->zipCode=$request->input('zipcode');
            $employee->logo=$fileNameToStore; 
            $employee->save();
            return redirect('/employee')->with('success','Employee Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
    }
}
