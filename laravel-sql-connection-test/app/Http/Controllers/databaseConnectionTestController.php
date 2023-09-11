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
            return "Connected to the database successfully!";
        } catch (\Exception $e) {
            return "Database connection failed: " . $e->getMessage();
        }
    }
}
