<?php

use App\Models\setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Website Sederhana',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_location',
            'label' => 'Alamat Kantor',
            'value' => 'Palapa, Pasar Minggu, Jakarta',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'https://youtube.com/azamiwandy',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_intsagram',
            'label' => 'Intsagram',
            'value' => 'https://intsagram.com/azamiwandy',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_twitter',
            'label' => 'twitter',
            'value' => 'https://youtube.com/azamiwandy',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_text_description',
            'label' => 'Site Description',
            'value' => 'Website sederhana dangan filament',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
