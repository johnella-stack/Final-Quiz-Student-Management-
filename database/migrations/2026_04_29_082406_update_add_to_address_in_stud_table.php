<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
{
    Schema::table('stud_table', function (Blueprint $table) {
        $table->renameColumn('add', 'address');
    });
}

public function down(): void
{
    Schema::table('stud_table', function (Blueprint $table) {
        $table->renameColumn('address', 'add');
    });
}
};