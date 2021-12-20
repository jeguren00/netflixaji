<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //2 movies 1 serie
        DB::table('videos')->insert([
            'title' => 'Back to the future',
            'year' => 1985,
            'sinopsis' => "El adolescente Marty McFly es amigo de Doc, un científico al que todos toman por loco. Cuando Doc crea una máquina para viajar en el tiempo, un error fortuito hace que Marty llegue a 1955, año en el que sus futuros padres aún no se habían conocido. Después de impedir su primer encuentro, deberá conseguir que se conozcan y se casen; de lo contrario, su existencia no sería posible. ",
            'duration' => "107",
            'type' => "movie",
            'image' => "./img/backToTheFuture.jpg",
            'idGenere' => "1",
            'file' => "./public/video/backToTheFuture.avi"
        ]);

        DB::table('videos')->insert([
            'title' => 'Jurassic Park',
            'year' => 1993,
            'sinopsis' => "John Hammond, consigue clonar dinosaurios y abrir así el Parque Jurásico Un parque temático para que la gente pueda ir a ver los dinosaurios. Aunque él quiere abrir ya el parque, es presionado por los inversores para que el parque no se abra hasta que se garantice que eso será seguro. Hammond convence al paleontólogo Alan Grant y a la paleobotánica Ellie Sattler para que visiten el parque en compañía del matemático Ian Malcolm y el representante de los inversores Donald Gennaro. Cuando llegan al parque, empiezan a enseñarles el funcionamiento de todo, y parece seguro. Sin embargo un dinosaurio consigue escapar y ahí empieza el caos. No será el único que consiga escapar del lugar donde están encerrados.",
            'duration' => "128",
            'type' => "movie",
            'image' => "./img/jurassicPark.jpg",
            'idGenere' => "1",
            'file' => "./public/video/jurassicPark.avi"
        ]);

        //serie
        DB::table('videos')->insert([
            'title' => 'Black Mirror',
            'year' => 2011,
            'sinopsis' => " Serie antológica creada por Charlie Brooker que muestra el lado oscuro de la tecnología y cómo esta afecta y puede alterar nuestra vida, a veces con consecuencias tan impredecibles como aterradoras. Black Mirror comenzó su emisión en 2011 en el canal británico Channel 4, con dos temporadas de tres episodios cada una, y tras producirse un especial de Navidad la serie fue comprada y renovada por Netflix, que ya ha producido tres temporadas más. ",
            'duration' => "",
            'type' => "serie",
            'image' => "./img/blackMirror.jpg",
            'idGenere' => "1",
            'file' => "./public/video/blackMirror11.avi",
            'season' => "1",
            'chapter' => "1"
        ]);

        DB::table('videos')->insert([
            'title' => 'Black Mirror',
            'year' => 2011,
            'sinopsis' => " Serie antológica creada por Charlie Brooker que muestra el lado oscuro de la tecnología y cómo esta afecta y puede alterar nuestra vida, a veces con consecuencias tan impredecibles como aterradoras.Black Mirror comenzó su emisión en 2011 en el canal británico Channel 4, con dos temporadas de tres episodios cada una, y tras producirse un especial de Navidad la serie fue comprada y renovada por Netflix, que ya ha producido tres temporadas más. ",
            'duration' => "",
            'type' => "serie",
            'image' => "./img/blackMirror.jpg",
            'idGenere' => "1",
            'file' => "./public/video/blackMirror12.avi",
            'season' => "1",
            'chapter' => "2"
        ]);

        DB::table('videos')->insert([
            'title' => 'Black Mirror',
            'year' => 2011,
            'sinopsis' => " Serie antológica creada por Charlie Brooker que muestra el lado oscuro de la tecnología y cómo esta afecta y puede alterar nuestra vida, a veces con consecuencias tan impredecibles como aterradoras. Black Mirror comenzó su emisión en 2011 en el canal británico Channel 4, con dos temporadas de tres episodios cada una, y tras producirse un especial de Navidad la serie fue comprada y renovada por Netflix, que ya ha producido tres temporadas más. ",
            'duration' => "",
            'type' => "serie",
            'image' => "./img/blackMirror.jpg",
            'idGenere' => "1",
            'file' => "./public/video/blackMirror13.avi",
            'season' => "1",
            'chapter' => "3"
        ]);
    }
}
