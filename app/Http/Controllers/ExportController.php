<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function exportPDF()
    {
        // retreive all records from db
        $data = User::all();
        // share data to view
        view()->share('users', $data);
        $pdf = Pdf::loadView('templatePdf', array(
            "users" => $data,
        ));
        // download PDF file with download method
        return $pdf->download('pdf_users.pdf');
    }

    public function export()
    {
        $userExport = new UsersExport();
        return Excel::download($userExport, 'users.xlsx');
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
