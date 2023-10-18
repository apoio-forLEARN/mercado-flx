<?php

namespace App\Models;

use App\Util\MigrationUtil;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [MigrationUtil::ID, 'code','name','description'];

    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }

}
