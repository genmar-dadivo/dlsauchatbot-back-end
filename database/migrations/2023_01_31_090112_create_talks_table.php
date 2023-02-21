<?php

use App\Models\Talk;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talks', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->integer('type');
            $table->timestamps();
        });

        // 1 Welcome
        Talk::create([
            'message' => "Hi! I'm " . env('BOT_NAME') . ". What's your name?",
            'type' => 1
        ]);

        Talk::create([
            'message' => "Hi There! My name is " . env('BOT_NAME') . ". What's yours?",
            'type' => 1
        ]);

        // 2 Response
        $name = '$name';
        Talk::create([
            'message' => "Nice to meet you chat_name!",
            'type' => 2
        ]);

        Talk::create([
            'message' => "Hi chat_name!",
            'type' => 2
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talks');
    }
};
