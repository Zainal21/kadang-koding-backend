<?php

use Illuminate\Database\Seeder;

class settingseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // $table->string('Nama_perusahaan');
    // $table->string('tagline');
    // $table->text('deskripsi');
    // $table->string('email');
    // $table->string('phone');
    // $table->string('url_website');
    // $table->string('logo');
    // $table->string('Hero_cover');

    public function run()
    {
        \App\setting::create([
            'Nama_perusahaan'=> 'KadangKoding Indonesia',
            'Tagline' => 'lorem',
            'deskripsi' => 'lorem ipsum',
            'email' => 'kadangkoding@gmail.com',
            'phone' => 31723721031,
            'url_website' => 'www.kadangkoding.com',
            'logo' => 'images/logo/logo.png',
            'Hero_cover' => 'images/Hero/hero.png',
        ]);
    }
}
