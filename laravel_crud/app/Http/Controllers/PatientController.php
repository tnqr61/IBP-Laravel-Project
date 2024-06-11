<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Hash;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        return view("layouts.patient.patientdata", compact("patients"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("layouts.patient.patientregister");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input("name");
        $tc = $request->input('tc');
        $serial_key= $request->input('serial_key');
        $disiase =Hash::make( $request->input("disiase"));
        Patient::create([
            "name"=> $name,
            "tc" => $tc,
            "serial_key" => $serial_key,
            "disiase" =>$disiase,

            ]);
            echo "Başarıyla eklendi";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patient = Patient::findOrFail($id);
        return view("layouts.patient.patientupdate", compact('patients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $patient = Patient::findOrFail($id);
        $patient->update( $request->all() );
        echo 'Başarıyla Güncellendi';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        echo "Başarıyla Silinmiştir";
    }
}
