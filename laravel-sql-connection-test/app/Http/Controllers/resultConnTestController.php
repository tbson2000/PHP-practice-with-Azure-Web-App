<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseConnectionTestController extends Controller
{
    public function index()
    {
        try {
            DB::connection()->getPdo();
            $message = "Connected to the database successfully!";
        } catch (\Exception $e) {
            $message = "Database connection failed: " . $e->getMessage();
        }

        return view('database_connection_test', ['message' => $message]);
    }
}