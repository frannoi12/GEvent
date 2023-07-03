<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\User;

use Illuminate\Http\Request;

class ExportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function exportPDF() {
        // retreive all records from db
        $data = User::all();
        // share data to view
        view()->share('users',$data);
        $pdf = PDF::loadView('templatePdf', array(
            "users" => $data
        ));
        // download PDF file with download method
        return $pdf->download('pdf_users.pdf');
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
