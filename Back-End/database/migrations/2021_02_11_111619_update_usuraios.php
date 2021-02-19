<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsuraios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) 
        {
            $table->year('Fecha_Nacimiento');
            $table->boolean('Tos_Seca');
            $table->boolean('Fiebre');
            $table->boolean('cansancio');
            $table->boolean('Molestias_Cansancio');
            $table->boolean('Dolor_De_Garganta');
            $table->boolean('Diarrea');
            $table->boolean('Conjuntivitis');
            $table->boolean('Dolor_De_Cabeza');
            $table->boolean('Pérdida_De_Olfato');
            $table->boolean('Pérdida_De_Gusto');
            $table->boolean('Erupciones_Cutáneas');
            $table->boolean('Pérdida_Del_Control_En_Los_Dedos_De_Las_Manos');
            $table->boolean('Dificultad_Para_Respirar');
            $table->boolean('Incapacidad_Para_Moverse');
            $table->boolean('Dolor/Presión_En_El_Pecho');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('users', function (Blueprint $table)
        {
            $table->dropColumn('Fecha_Nacimiento');
            $table->dropColumn('Tos_Seca');
            $table->dropColumn('Fiebre');
            $table->dropColumn('cansancio');
            $table->dropColumn('Molestias_Cansancio');
            $table->dropColumn('Dolor_De_Garganta');
            $table->dropColumn('Diarrea');
            $table->dropColumn('Conjuntuvitis');
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
