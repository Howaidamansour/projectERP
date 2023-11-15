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
    if($request->expectsJson()){
        return response()->json($row);
    }
    // return redirect()->back()->with('success', 'Saves Successfully');  
    
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
    public function edit(Request $request , $id)
    {
//         dd($id);
// dd($request->all());
        $transation = Transaction::where('id', $id)->first();
    
        $cat = $transation->category->name;
    
        return response()->json([$transation, $cat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransactionRequest $request , TransactionService $service, $id)
    {
        dd($id);
        $row = $service->handel($request->validated(), $id);

        return $row instanceof Exception
                ? response()->json($row, 500)
                : response()->json(['message' => 'Updated Sucessfuly'], 200);
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $transacton = Transaction::find($id);
        // dd($transacton);
        $transacton->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');  
    }
}
