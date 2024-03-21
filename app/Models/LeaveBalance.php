<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveBalance extends Model
{
    use HasFactory;
    protected $table = 'leave_balance';
    protected $fillable = [
        'leave_type',
        'leave_balance',
    ];
}
