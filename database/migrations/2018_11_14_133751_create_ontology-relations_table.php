<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOntologyRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ontology_relations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('domain')->nullable();
            $table->string('range')->nullable();
            $table->string('similar_relation')->nullable();
            $table->integer('cardinality')->nullable();
            $table->string('definition');
            $table->string('example_of_usage');
            $table->string('imported_from')->nullable();
            $table->string('formal_definition',191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ontology-relations');
    }
}
