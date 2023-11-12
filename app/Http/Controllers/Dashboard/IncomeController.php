<?php

namespace App\Http\Controllers\Dashboard;

use Exception;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\TransactionRequest;
use App\Services\Transaction as TransactionService;
use Session;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($type)
    {
        // dd($type);
        $rows = Transaction::where('type', $type)->get();
        // dd($rows);
        $categories = Category::all();
        return view('dashboard.spendsIncome.index', compact('rows', 'type', 'categories'));
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
    public function store(TransactionRequest $request , TransactionService $service, $id = null)
    {
        // dd($request->all());
        // dd(2324235456);
        $row = $service->handel($request->validated());
// dd($row);
return redirect()->back()->with('success', 'your message,here');  
    
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
    public function edit($id)
    {
        $transation = Transaction::where('id', $id)->first();
        // dd($transation);
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
