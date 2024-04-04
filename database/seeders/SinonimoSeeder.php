<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sinonimo;
use App\Models\Palabra;

class SinonimoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Obtener la ruta del archivo JSON
        $path = database_path('seeders/sinonimos.json');
        
        // Leer el contenido del JSON
        $json = file_get_contents($path);
        $data = json_decode($json);

        // Iterar sobre los datos y guardar en la base de datos
        foreach ($data as $grupoSinonimos) {
            // La primera palabra del grupo será la principal
            $palabraPrincipal = array_shift($grupoSinonimos);
            
            // Buscar o crear la palabra principal
            $palabra = Palabra::firstOrCreate(['nombre' => $palabraPrincipal]);

            // Insertar la palabra principal y sus sinónimos en la base de datos
            foreach ($grupoSinonimos as $sinonimo) {
                // Buscar o crear el sinónimo
                $sinonimoObj = Sinonimo::firstOrCreate(['nombre' => $sinonimo]);

                // Asociar el sinónimo con la palabra principal
                $palabra->sinonimos()->attach($sinonimoObj);
            }
        }
    }
}
