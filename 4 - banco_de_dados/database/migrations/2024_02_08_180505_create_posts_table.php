<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*
         $table->string('title', 50); 50 se refere ao tamanho máximo comportado. Ou seja,
         vai comportar no máximo 50 caracteres.

         Criando chave estrangeira:
         -> foreign('userId') se refere a $table->integer('userId')->unsigned().
         -> references('id') se refere à PK da tabela users. Basta ir no migration create_users_table
         -> on('users') é a tabela de referência.
        -> delete('cascade') = Se o usuário for deletado, automaticamente o post será deletado.

        Como o id da migration create_users_table é um bigInteger, preciso declarar o 'userId'
        como bigInteger


    */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users')->delete('cascade');
            $table->string('title', 50);
            $table->string('slug');
            $table->text('content');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
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
};
