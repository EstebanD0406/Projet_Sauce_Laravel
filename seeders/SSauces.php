<?php

namespace Database\Seeders;

use App\Models\Sauce;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SauceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Création de 2 sauces
        Sauce::create([
            'name' => 'PURÉE AJI AMARILLO',
            'manufacturer' => 'HELLICIOUS',
            'description' => 'Aji Amarillo, la nouveauté du côté de nos purées Hellicious fabriquées en France !
            Très consommé au Pérou d\'où il est originaire, ce piment doré est terriblement savoureux, son goût est unique et nous devions vous le faire découvrir !',
            'mainPepper' => 'Piment frais',
            'imageUrl' => 'https://www.sauce-piquante.fr/1106-large_default/puree-aji-amarillo-hellicious.jpg',
            'heat' => 1,
            'userId' => 1,
        ]);

        Sauce::create([
            'name' => 'PURÉE DE PIMENT CAROLINA REAPER',
            'manufacturer' => 'HELLICIOUS',
            'description' => 'Imaginez les vapeurs de plusieurs kilos du piment le plus fort du monde en train de cuire en cuisine...

            Chez Sauce Piquante on a souffert pour vous fabriquer cette purée de Carolina Reaper !! Dans la recette il n\'y a que du piment frais, du vinaigre pour la conservation.
            
            Nous avons clairement compris pourquoi ce piment est comparé à une bombe d\'auto défense, la brûlure est magistrale
            
            Pour ceux qui ont envie d\'en apprendre plus sur ce fameux piment extrême .',
            'mainPepper' => 'Piment extreme',
            'imageUrl' => 'https://www.sauce-piquante.fr/605-large_default/puree-de-piment-carolina-reaper-hellicious.jpg',
            'heat' => 4,
            'userId' => 1,
        ]);
    
        
    }
}
