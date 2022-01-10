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
<<<<<<< HEAD
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
=======
        DB::table('videos')->insert(
            [
                'title'     => 'Back to the future', 
                'year'      => 1985 , 
                'sinopsis'  => "El adolescente Marty McFly es amigo de Doc, un científico al que todos toman por loco.
                                Cuando Doc crea una máquina para viajar en el tiempo, un error fortuito hace que Marty llegue a 1955, año en el que sus futuros padres aún no se habían conocido.
                                Después de impedir su primer encuentro, deberá conseguir que se conozcan y se casen; de lo contrario, su existencia no sería posible. ",
                'duration'  => "107" ,
                'type'      => "movie",
                'image'     => "./img/backToTheFuture.jpg" ,
                'idGenere'  => "1" ,
                'file'      => "",
                'trailer'   => "/videos/trailerRegresoAlFuturo.mp4"
            ]
        );

        DB::table('videos')->insert(
            [
                'title'     => 'Jurassic Park', 
                'year'      => 1993 , 
                'sinopsis'  => "El multimillonario John Hammond consigue hacer realidad su sueño de clonar dinosaurios del Jurásico y crear con ellos un parque temático en una isla remota.
                                Antes de abrirlo al público, invita a una pareja de eminentes científicos y a un matemático para que comprueben la viabilidad del proyecto.
                                Pero las medidas de seguridad del parque no prevén el instinto de supervivencia de la madre naturaleza ni la codicia humana. ",
                'duration'  => "128" ,
                'type'      => "movie",
                'image'     => "./img/jurassicPark.jpg" ,
                'idGenere'  => "1" ,
                'file'      => "",
                'trailer'   => "/videos/trailerJurasikPark.mp4"
            ]
        );

        DB::table('videos')->insert(
            [
                'title'     => 'Interstellar',
                'year'      => 2014 , 
                'sinopsis'  => "Al ver que la vida en la Tierra está llegando a su fin, un grupo de exploradores dirigidos por el piloto Cooper (McConaughey)
                     y la científica Amelia (Hathaway) emprende una misión que puede ser la más importante de la historia de la humanidad:
                      viajar más allá de nuestra galaxia para descubrir algún planeta en otra que pueda garantizar el futuro de la raza humana.",
                'duration'  => "169" ,
                'type'      => "movie",
                'image'     => "./img/interstellar.jpg" ,
                'idGenere'  => "1" ,
                'file'      => "",
                'trailer'   => "/videos/trailerInterstellar.mp4"
            ]
        );

        //serie
        DB::table('videos')->insert(
            [
                'title'     => 'Black Mirror', 
                'year'      => 2011 , 
                'sinopsis'  => "https://en.wikipedia.org/wiki/Black_Mirror",
                'duration'  => "" ,
                'type'      => "serie",
                'image'     => "./img/blackMirror.jpg" ,
                'idGenere'  => "1" ,
                'file'      => "./public/video/blackMirror11.avi",
                'trailer'   => "",
                'season'    => "1",
                'chapter'   => "1"
            ]
        );

        DB::table('videos')->insert(
            [
                'title'     => 'Black Mirror', 
                'year'      => 2011 , 
                'sinopsis'  => "https://en.wikipedia.org/wiki/Black_Mirror",
                'duration'  => "" ,
                'type'      => "serie",
                'image'     => "./img/blackMirror.jpg" ,
                'idGenere'  => "1" ,
                'file'      => "./public/video/blackMirror12.avi",
                'trailer'   => "",
                'season'    => "1",
                'chapter'   => "2"
            ]
        );

        DB::table('videos')->insert(
            [
                'title'     => 'Black Mirror', 
                'year'      => 2011 , 
                'sinopsis'  => "https://en.wikipedia.org/wiki/Black_Mirror",
                'duration'  => "" ,
                'type'      => "serie",
                'image'     => "./img/blackMirror.jpg" ,
                'idGenere'  => "1" ,
                'file'      => "./public/video/blackMirror13.avi",
                'trailer'   => "",
                'season'    => "1",
                'chapter'   => "3"
            ]
        );
>>>>>>> videoControllerIgnasi
    }
}
