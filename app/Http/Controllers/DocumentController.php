<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\documentation;
use DB;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doc = documentation::orderBy('created_at','desc')->get();
        return view('/pages.dcvault')->with('doc',$doc);
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
        $this->validate($request,[
            'docfile'=>'required',
            'emaill'=>'required'
        ]);
        $email = $request->input('emaill');
        if($request->hasFile('docfile'))
        {
            $files=$request->file('docfile');
            foreach($files as $file){
                //  GEt filename with extension
            $fileNameWithExt = $file->getClientOriginalName();
            //Get just filename
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get extension
            $extension = $file->getClientOriginalExtension();
            //File name to store
            $fileNameToStore1 = $fileName . '_'.time().'.'.$extension;
            //Upload image
            $path = $file->storeAs('public/Documentation',$fileNameToStore1);
            $size=$file->getSize();
            
            
            $empid = DB::table('employees')->where('email', $email)->first();
            $doc = new documentation;
            $doc->employee_id = $empid->id;
            $doc->doc_file1 = $fileNameToStore1;
            $doc->file_size = $size;
            $doc->save();
            
            }

            return redirect('/employee/create')->with('success','Documents Added');
            
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $documents = documentation::orderBy('created_at','desc')->paginate(100);
        return view('employee.addDoc')->with('documents',$documents);
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
