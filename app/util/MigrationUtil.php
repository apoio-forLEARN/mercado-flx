<?php

namespace App\Util;

use Illuminate\Database\Schema\Blueprint;

class MigrationUtil{

    public const ID = "id";
    public const CREATEDBY = "created_by";
    public const UPDATEDBY = "updated_by";
    public const DELETEDBY = "deleted_by";
    public const DELETEDAT = "deleted_at";


    public static function commonAttribute(Blueprint $table){
        $table->timestamps();
        $table->uuid(MigrationUtil::CREATEDBY)->nullable();
        $table->uuid(MigrationUtil::UPDATEDBY)->nullable();
        $table->uuid(MigrationUtil::DELETEDBY)->nullable();
        $table->dateTime(MigrationUtil::DELETEDAT)->nullable();
    }

    public static function primaryKey(Blueprint $table){
        $table->uuid(MigrationUtil::ID)->primary();
    }

    public static function fillable(Array $fillable): array{
        return array_merge($fillable,[
            MigrationUtil::CREATEDBY,
            MigrationUtil::UPDATEDBY,
            MigrationUtil::DELETEDBY,
            MigrationUtil::DELETEDAT,
            MigrationUtil::ID
        ]);
    }

}
