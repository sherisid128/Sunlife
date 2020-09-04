<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\documentation;
use App\employee;
use App\certification;
use DB;
use Carbon\Carbon;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'cerfile'=>'required',
            'exdate'=>'required',
            'emaill'=>'required'
        ]);
        $email = $request->input('emaill');
        if($request->hasFile('cerfile'))
        {
            $files=$request->file('cerfile');
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
            $path = $file->storeAs('public/Certifications',$fileNameToStore1);
            $size=$file->getSize();
            $dateToStore = $request->input('exdate');
            $empid = DB::table('employees')->where('email', $email)->first();
            $cer = new certification;
            $cer->employee_id = $empid->id;
            $cer->cert_file = $fileNameToStore1;
            $cer->expires_at = $dateToStore;
            $cer->file_size = $size;
            $cer->save();
            

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
