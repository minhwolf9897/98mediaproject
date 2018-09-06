<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Ảnh cưới chị Hai',
                'category_id' => 1,
                'description' => 'Đại lải Famigo lala',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Ảnh kỉ yếu em Linh',
                'category_id' => 2,
                'description' => 'FTU Look book ',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Ảnh thời trang em Trang',
                'category_id' => 3,
                'description' => 'So Deep , So Beatiful',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'Video cưới chị Dung',
                'category_id' => 4,
                'description' => 'PSC chị Dung Hải Dương ',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => 'Film Ngắn của Minh',
                'category_id' => 5,
                'description' => 'Film ngắn đẹp  ',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'name' => 'Ấn phẩm 2D đẹp ',
                'category_id' => 6,
                'description' => 'Thiết kế logo với 98 ',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s')
            ]]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
