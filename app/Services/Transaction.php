<?php
namespace App\Services;

use App\Models\Transaction as Transaction2;
use Exception;

class Transaction
{
    public function handel(array $data, ?int $id = null)
    {
        try {
            return Transaction2::updateOrCreate(['id' => $id, 'user_id' => auth()->user()->id], $data);
        } catch(Exception $e) {
            return $e;
        }
    }
}
