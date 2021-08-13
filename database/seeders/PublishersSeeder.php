<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Publisher::create([
                'name' => 'Nhà xuất bản ' . $i,
                'description' => 'Nhà xuất bản sản xuất ra nhiều loại sách phục vụ
                 cho mọi đối tượng bạn đọc từ thiếu nhi cho tới thanh thiếu niên',
            ]);
        }
    }
}
