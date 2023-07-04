<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpdateCafeUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cafe_usuarios')->where('id', 1)->update(['fk_idEndereco_usu' => 1]);
        DB::table('cafe_usuarios')->where('id', 2)->update(
                                                            [
                                                                'fk_idEndereco_usu' => 2,
                                                                'fk_idUsuarioIndicacao' => 1 
                                                            ]
                                                        );
        DB::table('cafe_usuarios')->where('id', 3)->update(
                                                            [
                                                                'fk_idEndereco_usu' => 3, 
                                                                'fk_idUsuarioIndicacao' => 2 
                                                            ]
                                                        );

    }
}
