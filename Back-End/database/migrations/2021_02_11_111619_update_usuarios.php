<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('Fecha_Nacimiento')->nullable();
            $table->string('Sexo')->nullable();
            $table->boolean('Tos_Seca')->nullable();
            $table->boolean('Fiebre')->nullable();
            $table->boolean('cansancio')->nullable();
            $table->boolean('Molestias_Cansancio')->nullable();
            $table->boolean('Dolor_De_Garganta')->nullable();
            $table->boolean('Diarrea')->nullable();
            $table->boolean('Conjuntivitis')->nullable();
            $table->boolean('Dolor_De_Cabeza')->nullable();
            $table->boolean('Pérdida_De_Olfato')->nullable();
            $table->boolean('Pérdida_De_Gusto')->nullable();
            $table->boolean('Erupciones_Cutáneas')->nullable();
            $table->boolean('Pérdida_Del_Control_En_Los_Dedos')->nullable();
            $table->boolean('Dificultad_Para_Respirar')->nullable();
            $table->boolean('Incapacidad_Para_Moverse')->nullable();
            $table->boolean('Dolor/Presión_En_El_Pecho')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('users', function (Blueprint $table) {
            $table->dropColumn('Fecha_Nacimiento');
            $table->dropColumn('Sexo');
            $table->dropColumn('Tos_Seca');
            $table->dropColumn('Fiebre');
            $table->dropColumn('cansancio');
            $table->dropColumn('Molestias_Cansancio');
            $table->dropColumn('Dolor_De_Garganta');
            $table->dropColumn('Diarrea');
            $table->dropColumn('Conjuntivitis');
            $table->dropColumn('Dolor_De_Cabeza');
            $table->dropColumn('Pérdida_De_Olfato');
            $table->dropColumn('Pérdida_De_Gusto');
            $table->dropColumn('Erupciones_Cutáneas');
            $table->dropColumn('Pérdida_Del_Control_En_Los_Dedos');
            $table->dropColumn('Dificultad_Para_Respirar');
            $table->dropColumn('Incapacidad_Para_Moverse');
            $table->dropColumn('Dolor/Presión_En_El_Pecho');
        });
    }
}
