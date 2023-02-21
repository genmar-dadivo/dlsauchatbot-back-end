<?php

use App\Models\Course;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('group_id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Course::create([
            'group_id' => 1,
            'name' => 'BS ACC'
        ]);

        Course::create([
            'group_id' => 1,
            'name' => 'BSMM'
        ]);

        Course::create([
            'group_id' => 1,
            'name' => 'BSFM'
        ]);

        Course::create([
            'group_id' => 1,
            'name' => 'BSTM'
        ]);

        Course::create([
            'group_id' => 1,
            'name' => 'BSHM'
        ]);

        Course::create([
            'group_id' => 2,
            'name' => 'BS Elementary'
        ]);

        Course::create([
            'group_id' => 2,
            'name' => 'BS Secondary'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
