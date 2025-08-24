<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Add_admin_acc extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $updated = DB::table("users")
            ->where('name', 'Гансюта')
            ->update(['role' => 'admin']);

        if ($updated > 0) {
            echo "Оновлено {$updated} записів";
        } else {
            echo "Записи не оновлено. Можливо, користувача не знайдено або роль вже 'admin'";
        }
    }

}
