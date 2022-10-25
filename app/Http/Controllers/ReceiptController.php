<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipts;

class ReceiptController extends Controller
{
    # 取得処理
    public function store(Request $request)
    {
        $receipt = new Receipts();
        $receipt->name = "上";
        $receipt->issue_no = "issue-".now();
        $receipt->issue_date = now();
        $receipt->company_id = 100;
        $receipt->created_at = now();
        $receipt->updated_at = now();

        $receipt->save();

        return response()->json($receipt->all());
    }
    
    # 取得処理
    public function restore(Request $request)
    {
        $receipt = new Receipts();
        return $receipt->all();
    }
}
