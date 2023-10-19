<?php

namespace App\Models;

use App\Util\MigrationUtil;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [MigrationUtil::ID,'image','name','code'];

}
