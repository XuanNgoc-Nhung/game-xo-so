<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loMotPhut extends Model
{
    protected $fillable = ['giai_nhat', 'giai_nhi', 'giai_ba', 'giai_tu', 'giai_nam', 'giai_sau', 'giai_bay', 'dac_biet'];
    protected $table = 'lo_1_phut';
}
