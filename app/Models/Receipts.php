<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipts extends Model
{
    protected $table = 'tr_receipts';

    // fillableに指定したプロパティは入力可能になる
    protected  $fillable = [
        'name',
        'issue_no',
        'issue_date',
        'company_id',
        'created_at',
        'updated_at'
        ];
}
