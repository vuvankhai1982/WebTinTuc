<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('tieu_de');
            $table->text('tom_tat')->nullable();
            $table->text('noi_dung')->nullable();
            $table->unsignedTinyInteger('status_id');
            $table->unsignedTinyInteger('type_id');
            $table->unsignedTinyInteger('noi_bat');
            $table->unsignedBigInteger('user_id');
            $table->string('image')->nullable();
            $table->string('image_url')->nullable();
            $table->string('thumbnail_image')->nullable();


            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
