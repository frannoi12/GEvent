<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evenement_participants', function (Blueprint $table) {
            $table->bigInteger("id_participant");
            $table->bigInteger("id_event");
            $table->foreign("id_event")->references("id")->on("evenements");
            $table->foreign("id_participant")->references("id")->on("participants");
            $table->primary("id_event","id_participant");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements_participants');
    }
};
