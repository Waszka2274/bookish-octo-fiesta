<?php

namespace Database\Seeders;

// database/seeders/DatabaseSeeder.php

use Illuminate\Database\Seeder;
use App\Models\People;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        People::factory()->count(200)->create();
    }
}
