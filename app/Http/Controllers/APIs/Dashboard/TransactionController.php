<?php

namespace App\Http\Controllers\APIs\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Transaction as TransactionResource;
use App\Models\Transaction;
use App\Http\Controllers\APIs\BaseController;
use App\Http\Requests\TransactionRequest as TransactionRequest;
use App\Services\Transaction as TransactionService;
class TransactionController extends BaseController
{
    public function index (Request $request , $type) {
        $transactions = Transaction::where('type', $type)->get();
        return $this->sendResponse(TransactionResource::collection($transactions),
        'all transactions retrive succcesfully');

    }
    
    public function store (TransactionRequest $request, TransactionService $service ) {
      
        if ($request->validated()) {
            $row  = Transaction::create([
                'amount' => $request->amount,
                'type' => $request->type,
                'category_id' => $request->category_id,
                'user_id' => auth()->user()->id
            ]);
            return $this->sendResponse(new TransactionResource($row), 'transactions added successfully'); 
        } else {
            return $this->sendError('please validate your transaction');
        }
       

    }

    public function update (TransactionRequest $request, Transaction $transaction) {
// dd(675);
        if ($request->validated()) {
            if ($transaction) {
            $row = $transaction->update([
                'amount' => $request->amount,
                'category_id' => $request->category_id,
            ]);
            return $this->sendResponse(new TransactionResource($row), 'transactions updated successfully');
        }
        } else {
            return $this->sendError('please validate your transaction');
        }
    }

    public function delete (Transaction $transaction) {
        $transaction->delete();
        return $this->sendResponse(new TransactionResource($transaction), 'transactions deleted successfully'); 
    }
}

       