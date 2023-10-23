<?php

namespace App\Models;

use App\Util\MigrationUtil;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, HasUuids;

    public const CODE = "code";
    public const NAME = "name";
    public const DESCRIPTION = "description";

    protected $fillable = [
        MigrationUtil::ID,
        Role::CODE,
        Role::NAME,
        Role::DESCRIPTION
    ];

    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }

}
