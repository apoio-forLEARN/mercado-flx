<?php

namespace App\Models;

use App\Util\MigrationUtil;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory, HasUuids;

    public const CODE = "code";
    public const NAME = "name";
    public const GROUP = "group";
    public const ENTITY = "entity";
    public const DESCRIPTION = "description";

    protected $fillable = [
        MigrationUtil::ID,
        Permission::CODE,
        Permission::NAME,
        Permission::GROUP,
        Permission::ENTITY,
        Permission::DESCRIPTION
    ];

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

}
