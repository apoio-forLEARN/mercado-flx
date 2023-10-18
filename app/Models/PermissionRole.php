<?php

namespace App\Models;

use App\Util\MigrationUtil;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    use HasFactory, HasUuids;

    protected $table = "permission_role";

    protected $fillable = [MigrationUtil::ID,'permission_id','role_id'];

    public function permission(){
        return $this->belongsTo(Permission::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

}
