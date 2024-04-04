# CalcAndDicPLaravel

Proyecto realizado en laravel - MVC. de una calculadora y un buscador de sinonimos.
Para poder iniciar este proyecto se requiere la instalacion de composer y un sistema de gestion como xampp.
La ruta para iniciar la calculadora es la default '/' o '/calculadora'
La ruta de bienvenida para laravel es '/welcome'
La ruta para iniciar los sinonimos es '/sinonimo'

Para hacer uso de este buscador de sinonimos, se agrego un json (creditos a edublancas) con algunos sinonimos, se usa la primer palabra como principal y esta es la necesaria pa buscar sus sinonimos mediante una tabla pivote relacionandolos con la tabla sinonimos
Por eso, es necesario:
 * realizar las migraciones
 * usar php artisan db:seed --class=SinonimoSeeder


Calculadora - completada
Sinonimos - completada

 
