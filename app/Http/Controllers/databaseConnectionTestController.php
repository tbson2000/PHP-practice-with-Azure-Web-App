<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databaseConnectionTestController extends Controller
{
    public function index()
    {
        try {
            DB::connection()->getPdo();
            $message = "Connected to the database successfully!";
             return view('database-connection-test', ['result' => $message]);
        } catch (\Exception $e) {
            return "Database connection failed: " . $e->getMessage();
        }
    }

    public function showForm()
    {
        return view('database-connection-test');
    }
}
