<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forwarder;
use App\Models\Car;
use App\Models\Successfull;
use App\DataTables\ExportDataTable;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Imports\EntryImport;
class dataController extends Controller
{

    public function fileImport(Request $request)
    {



        Excel::import(new EntryImport, $request->file('file')->store('temp'));
        return back();
    }


}
