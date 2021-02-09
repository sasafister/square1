<?php

namespace App\Http\Controllers;

use App\Square\BaseImporter;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function store(Request $request, BaseImporter $import) 
    {
        return $import->allPosts($request);
    }
}
