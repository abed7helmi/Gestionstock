<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string('cp')->unique();
            //Agent
            $table->string('nom');
            $table->string('prenom');
            $table->string('statut');
            $table->string('pc')->nullable();
             //checkbox
            $table->string('ecran')->nullable();
            $table->string('souris')->nullable();
            $table->string('casque')->nullable();
            $table->string('clavier')->nullable();
            $table->string('base')->nullable();
            //PC
            $table->string('modele_pc1')->nullable();
            $table->string('version_windows1')->nullable();
            $table->string('version_ram1')->nullable();
            $table->string('version_ssd1')->nullable();

            $table->string('modele_pc3')->nullable();
            $table->string('version_windows3')->nullable();
            $table->string('version_ram3')->nullable();
            $table->string('version_ssd3')->nullable();

            $table->string('modele_pc2')->nullable();
            $table->string('version_windows2')->nullable();
            $table->string('version_ram2')->nullable();
            $table->string('version_ssd2')->nullable();



            //ecran
            $table->string('marque_ecran1')->nullable();
            $table->string('taille_ecran1')->nullable();
            $table->string('quantite_ecran1')->nullable();

            $table->string('marque_ecran2')->nullable();
            $table->string('taille_ecran2')->nullable();
            $table->string('quantite_ecran2')->nullable();

            

            //souris
            $table->string('quantite_souris1')->nullable();
            $table->string('quantite_souris2')->nullable();
            
            
            //base
            $table->string('base_marque')->nullable();


            //clavier
            $table->string('marque_clavier')->nullable();

            //casque
            //$table->string('quantite_casque')->nullable();

            //casque_sansfil
            $table->string('quantite_casque2')->nullable();
            $table->string('quantite_casque1')->nullable();




            // Pieuvre
            $table->string('modele_pieuvre')->nullable();
            $table->string('quantite_pieuvre')->nullable();

            $table->text('commentaire')->nullable();
           
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
        Schema::dropIfExists('demandes');
    }
}
