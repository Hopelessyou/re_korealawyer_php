<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TaxonomySeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        // 분야(Field) 최소 세트 (한글명/슬러그 쌍으로 고정)
        $fields = [
            ['ko' => '형사',   'slug' => 'criminal'],
            ['ko' => '민사',   'slug' => 'civil'],
            ['ko' => '가사',   'slug' => 'family'],
            ['ko' => '부동산', 'slug' => 'real-estate'],
            ['ko' => '노무',   'slug' => 'labor'],
            ['ko' => '상속',   'slug' => 'inheritance'],
            ['ko' => '지재',   'slug' => 'ip'],
            ['ko' => '교통사고','slug' => 'traffic'],
        ];

        foreach ($fields as $f) {
            DB::table('taxonomies')->insert([
                'id'        => Str::uuid(),
                'type'      => 'field',
                'name_ko'   => $f['ko'],
                'slug'      => $f['slug'],
                'parent_id' => null,
                'sort'      => 0,
                'meta'      => json_encode([]),
                'created_at'=> $now,
                'updated_at'=> $now,
            ]);
        }
    }
}
