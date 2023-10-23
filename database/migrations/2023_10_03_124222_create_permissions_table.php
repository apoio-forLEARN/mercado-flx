<?php

use App\Enum\PermissionGroupEnum;
use App\Models\Permission;
use App\Util\MigrationUtil;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permissions', function (Blueprint $table) {
            MigrationUtil::primaryKey($table);
            $table->string(Permission::CODE)->unique();
            $table->string(Permission::NAME);
            $table->string(Permission::DESCRIPTION);
            $table->string(Permission::ENTITY)->default('NONE');
            $table->enum(Permission::GROUP,PermissionGroupEnum::groups())
                  ->default(PermissionGroupEnum::NONE);
            MigrationUtil::commonAttribute($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
