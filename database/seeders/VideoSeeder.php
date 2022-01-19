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
                'file'      => "",
                'trailer'   => "/videos/trailerInterstellar.mp4"
            ]
        );

        DB::table('videos')->insert(
            [
                'title'     => 'Indiana Jones and the Last Crusade',
                'year'      => 1989 , 
                'sinopsis'  => "La trama describe la búsqueda del padre del arqueólogo, secuestrado por los nazis, los cuales buscan el Grial para obtener la inmortalidad. Para impedirlo, Indy debe descubrir una serie de pistas relacionadas con el mismo, 
                las cuales habrían de llevarlo directamente a la ubicación del legendario cáliz usado por Jesucristo en La Última Cena. ",
                'duration'  => "123" ,
                'type'      => "movie",
                'image'     => "./img/indiJonesCrussade.jpg" ,
                'file'      => "",
                'trailer'   => ""
            ]
        );

        DB::table('videos')->insert(
            [
                'title'     => 'Lawrence of Arabia',
                'year'      => 1962 , 
                'sinopsis'  => "La película se basa en la participación de Thomas Edward Lawrence en la revuelta árabe, durante la Primera Guerra Mundial.",
                'duration'  => "222" ,
                'type'      => "movie",
                'image'     => "./img/Lawrence_of_arabia.jpg" ,
                'file'      => "",
                'trailer'   => ""
            ]
        );

        DB::table('videos')->insert(
            [
                'title'     => 'Battle of Britain',
                'year'      => 1962 , 
                'sinopsis'  => "La batalla de Inglaterra es una película inspirada en el famoso hecho homónimo, 
                cuando el ejército nazi intentó invadir Inglaterra en el año 1940 al inicio de la Segunda Guerra Mundial.",
                'duration'  => "222" ,
                'type'      => "movie",
                'image'     => "./img/battleOfBritain.jpg" ,
                'file'      => "",
                'trailer'   => ""
            ]
        );

        //series
        DB::table('videos')->insert(
            [
                'title'     => 'Black Mirror', 
                'year'      => 2011 , 
                'sinopsis'  => "Black Mirror es una producción británica desarrollada por Charlie Brooker ('Dead set: Muerte en directo'), 
                                Una serie de episodios independientes entre sí y, con un reparto y tramas totalmente diferentes, 
                                cuyo único punto común es el poder de las nuevas tecnologías para mover el mundo.",
                'duration'  => "" ,
                'type'      => "serie",
                'image'     => "./img/blackMirror.jpg" ,
                'file'      => "./public/video/blackMirror11.avi",
                'trailer'   => "",
                'season'    => "0",
                'chapter'   => "0"
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
                'file'      => "./public/video/blackMirror13.avi",
                'trailer'   => "",
                'season'    => "1",
                'chapter'   => "3"
            ]
        );

        DB::table('videos')->insert(
            [
                'title'     => 'Rome', 
                'year'      => 2005 , 
                'sinopsis'  => "La serie es un drama histórico que representa el período que rodea la violenta transformación de la República romana en el Imperio romano; 
                un cambio causado por una guerra civil entre populistas (populares) y conservadores (optimates), la crisis de las instituciones políticas y las actuaciones de hombres y mujeres muy ambiciosos. .",
                'duration'  => "" ,
                'type'      => "serie",
                'image'     => "./img/roma.jpeg" ,
                'file'      => " ",
                'trailer'   => "",
                'season'    => "0",
                'chapter'   => "0"
            ]
        );

        DB::table('videos')->insert(
            [
                'title'     => 'Rome', 
                'year'      => 2005 , 
                'sinopsis'  => "La serie es un drama histórico que representa el período que rodea la violenta transformación de la República romana en el Imperio romano; 
                un cambio causado por una guerra civil entre populistas (populares) y conservadores (optimates), la crisis de las instituciones políticas y las actuaciones de hombres y mujeres muy ambiciosos. .",
                'duration'  => "" ,
                'type'      => "serie",
                'image'     => "./img/roma.jpeg" ,
                'file'      => "./public/video/roma11.avi",
                'trailer'   => "",
                'season'    => "1",
                'chapter'   => "1"
            ]
        );

        DB::table('videos')->insert(
            [
                'title'     => 'Rome', 
                'year'      => 2005 , 
                'sinopsis'  => "La serie es un drama histórico que representa el período que rodea la violenta transformación de la República romana en el Imperio romano; 
                un cambio causado por una guerra civil entre populistas (populares) y conservadores (optimates), la crisis de las instituciones políticas y las actuaciones de hombres y mujeres muy ambiciosos. .",
                'duration'  => "" ,
                'type'      => "serie",
                'image'     => "./img/roma.jpeg" ,
                'file'      => "./public/video/roma12.avi",
                'trailer'   => "",
                'season'    => "1",
                'chapter'   => "2"
            ]
        );

        DB::table('videos')->insert(
            [
                'title'     => 'Rome', 
                'year'      => 2005 , 
                'sinopsis'  => "La serie es un drama histórico que representa el período que rodea la violenta transformación de la República romana en el Imperio romano; 
                un cambio causado por una guerra civil entre populistas (populares) y conservadores (optimates), la crisis de las instituciones políticas y las actuaciones de hombres y mujeres muy ambiciosos. .",
                'duration'  => "" ,
                'type'      => "serie",
                'image'     => "./img/roma.jpeg" ,
                'file'      => "./public/video/roma13.avi",
                'trailer'   => "",
                'season'    => "1",
                'chapter'   => "3"
            ]
        );
    }
}
