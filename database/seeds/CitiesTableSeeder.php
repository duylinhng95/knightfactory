<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CitiesTableSeeder::class);

    }
}
class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['name' => 'Hồ Chí Minh','address' =>'Lầu 2, Tòa Nhà TS, 17 Đường số 2, cư xá Đô Thành, P4, Q3'],
            ['name' => 'Hà Nội','address'=>'Phòng 22.01- Tòa C37 Bắc Hà, Sảnh D, T02 - 17 Tố Hữu (Lê Văn Lương kéo dài), Hà Nội.'] ,
            ['name'=>'Đà Nẵng','address'=>'Phòng A32-08 - Toà nhà Hoàng Anh Gia Lai, 72 Hàm Nghi'],
            ['name'=>'Cần Thơ','address'=>'84/36A. Hẻm 86-CMT8, P. Cái Khế, Q. Ninh Kiều, TP. Cần Thơ']
        ]);
    }
}
