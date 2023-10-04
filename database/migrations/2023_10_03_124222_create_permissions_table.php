<?php

use App\Enum\PermissionGroupEnum;
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
            $table->string('code')->unique();
            $table->string('name');
            $table->string('description');
            $table->string('entity')->default('NONE');
            $table->enum('group',PermissionGroupEnum::groups())->default(PermissionGroupEnum::NONE);
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
