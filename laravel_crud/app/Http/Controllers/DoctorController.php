<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Hash;

class DoctorController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view("layouts.doctor.doctordata", compact("doctors"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("layouts.doctor.doctorregister");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input("name");
        $department = $request->input('department');
        $email= $request->input('email');
        $password =Hash::make( $request->input("password"));
        Doctor::create([
            "name"=> $name,
            "department" => $department,
            "email"=>$email,
            "password"=>$password,
            ]);
            echo "Başarıyla eklendi";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = Doctor::findOrFail($id);
        return view("layouts.doctor.doctorupdate", compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $doctor = Doctor::findOrFail($id);
         $doctor->update( $request->all() );
         echo 'Başarıyla Güncellendi';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        echo "Başarıyla Silinmiştir";
    }
}
