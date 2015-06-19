<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {


        DB::table('tags')->truncate();

        DB::table('tags')->insert(array(
            array(
                'name'       => 'Quilting',
                'slug'       => Str::slug('Quilting'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'       => 'tr',
            ),
            array(
                'name'       => 'Grace Frames',
                'slug'       => Str::slug('Grace Frames'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'       => 'tr',
            ),
            array(
                'name'       => 'Quilting Accessories',
                'slug'       => Str::slug('Quilting Accessories'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'       => 'tr',
            ),
            array(
                'name'       => 'The Grace Company',
                'slug'       => Str::slug('The Grace Company'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'       => 'tr',
            ),
            array(
                'name'       => 'Qnique Quilter',
                'slug'       => Str::slug('Qnique Quilter'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'       => 'tr',
            ),
            array(
                'name'       => 'Quilting Machines',
                'slug'       => Str::slug('Quilting Machines'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'       => 'tr',
            ),
            array(
                'name'       => 'Sewing Machine',
                'slug'       => Str::slug('Sewing Machine'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'       => 'tr',
            ),
            array(
                'name'       => 'Grace Manufacturing',
                'slug'       => Str::slug('Grace Manufacturing'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'       => 'tr',
            ),
            array(
                'name'       => 'Hand Quilting Frames',
                'slug'       => Str::slug('Hand Quilting Frames'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'       => 'tr',
            ),
            array(
                'name'       => 'Quilting Hoops',
                'slug'       => Str::slug('Quilting Hoops'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'       => 'tr',
            ),
            array(
                'name'       => 'Grace Social',
                'slug'       => Str::slug('Grace Social'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'             => 'tr',
            ),
            array(
                'name'       => 'Laser Stylus',
                'slug'       => Str::slug('Laser Stylus'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'       => 'tr',
            ),
            array(
                'name'       => 'Stitching Regulation',
                'slug'       => Str::slug('Stitching Regulation'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'       => 'tr',
            ),
            array(
                'name'       => 'Quilt Design',
                'slug'       => Str::slug('Quilt Design'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'       => 'tr',
            ),
            array(
                'name'       => 'Qnique',
                'slug'       => Str::slug('Qnique'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'lang'       => 'en',
            )
        ));
    }
}
