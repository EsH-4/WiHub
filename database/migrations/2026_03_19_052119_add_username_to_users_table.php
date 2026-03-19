<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable()->after('name');
        });

        User::query()->select('id', 'name')->get()->each(function (User $user) {
            $baseUsername = Str::slug($user->name ?: 'user', '');
            $baseUsername = $baseUsername !== '' ? $baseUsername : 'user';

            $username = $baseUsername;
            $counter = 1;

            while (
                User::where('username', $username)
                    ->where('id', '!=', $user->id)
                    ->exists()
            ) {
                $username = $baseUsername . $counter;
                $counter++;
            }

            $user->username = $username;
            $user->save();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unique('username');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['username']);
            $table->dropColumn('username');
        });
    }
};