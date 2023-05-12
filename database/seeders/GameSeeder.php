<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            'name' => 'Zombigrama',
            'description' => 'Ao premer en "Empezar" sairán tres letras aleatorias e unha categoría gramatical (adxectivo, substantivo ou verbo). Durante un minuto,
            todos os xogadores deben escribir palabras
            que conteñan as tres letras e que pertenzan á categoría gramatical correspondente. Os verbos deben estar en infinitivo,
            os adxectivos deben estar en masculino e
            singular e os nomes non poden ser plurais nim femeninos, a no ser que signifiquen
            cousas diferentes (podese poñer SASTRE ou
            SASTRA, pero non as dúas palabras). <br>
            Cando pasou o minuto, os xogadores
            len as palabras que escribiron. Anotan un
            punto por cada palabra que dixera o outro
            xogador e tres por cada palabra non dixera ninguén mais. <br>
            Se retiran del juego las tres letras utilizadas.
            La letra de categoría se vuelve a girar y se
            mezcla con las otras cuatro. Se cogen tres
            nuevas letras del saco, se gira unha letra de
            categoría y se vuelve a jugar.
            Gana el primer jugador que llega a 100 puntos'
        ]);

        Game::create([
            'name' => 'Votagrama',
            'description' => 'Ao premer en empezar sairán dez letras "boas" e catro "malas". Durante un minuto todos ox xogadores deben
            escribir unha palabra que non conteña ningunha das letras “malas” e que conteña
            cantas mais letras "boas" mellor. Poden
            escribir tantas palabras como queiran, pero
            cando se acaba o tempo só poden
            decir unha. <br>
            As palabras cunha ou mais letras malas anúlanse non valen ningún punto. Tamén
            se anulan as palabras que non teñan como
            mínimo a metade de letras "boas". <br>
            Cada xogador cobra tantos puntos como
            letras "boas" hai na súa palabra. Se hai
            letras repetidas, trátanse como se foran
            diferentes, por exemplo: se hai unha A nas
            letras "boas" e ningunha nas “malas” e un
            xogador escribe ARMARIO cobra unha A; se
            hai dous E nas letras "boas" e ningunha
            nas “malas” e un xogador escribe FUNDAMENTAL cobra unha E, non dous. Además, o xogador que incluira mais letras "boas"
            na súa palabra gaña 3 puntos extra. Se dous ou
            mais xogadores utilizaron a mesma cantidade de letras, gaña o que escribira a
            palabra mais curta. <br> Esta acción repetirase ata que un xogador chegue a 50 puntos e, por tanto, gañe a partida.'
        ]);
    }
}
