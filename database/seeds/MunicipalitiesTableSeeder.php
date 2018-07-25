<?php

use Illuminate\Database\Seeder;

class MunicipalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('municipalities')->insert([
    	['id' => 1, 'municipality' => 'Alto Orinoco', 'state_id' => 1],
		['id' => 2, 'municipality' => 'Atabapo', 'state_id' => 1],
		['id' => 3, 'municipality' => 'Atures', 'state_id' => 1],
		['id' => 4, 'municipality' => 'Autana', 'state_id' => 1],
		['id' => 5, 'municipality' => 'Manapiare', 'state_id' => 1],
		['id' => 6, 'municipality' => 'Maroa', 'state_id' => 1],
		['id' => 7, 'municipality' => 'Río Negro', 'state_id' => 1],
		['id' => 8, 'municipality' => 'Anaco', 'state_id' => 2],
		['id' => 9, 'municipality' => 'Aragua', 'state_id' => 2],
		['id' => 10, 'municipality' => 'Manuel Ezequiel Bruzual', 'state_id' => 2],
		['id' => 11, 'municipality' => 'Diego Bautista Urbaneja', 'state_id' => 2],
		['id' => 12, 'municipality' => 'Fernando Peñalver', 'state_id' => 2],
		['id' => 13, 'municipality' => 'Francisco Del Carmen Carvajal', 'state_id' => 2],
		['id' => 14, 'municipality' => 'General Sir Arthur McGregor', 'state_id' => 2],
		['id' => 15, 'municipality' => 'Guanta', 'state_id' => 2],
		['id' => 16, 'municipality' => 'Independencia', 'state_id' => 2],
		['id' => 17, 'municipality' => 'José Gregorio Monagas', 'state_id' => 2],
		['id' => 18, 'municipality' => 'Juan Antonio Sotillo', 'state_id' => 2],
		['id' => 19, 'municipality' => 'Juan Manuel Cajigal', 'state_id' => 2],
		['id' => 20, 'municipality' => 'Libertad', 'state_id' => 2],
		['id' => 21, 'municipality' => 'Francisco de Miranda', 'state_id' => 2],
		['id' => 22, 'municipality' => 'Pedro María Freites', 'state_id' => 2],
		['id' => 23, 'municipality' => 'Píritu', 'state_id' => 2],
		['id' => 24, 'municipality' => 'San José de Guanipa', 'state_id' => 2],
		['id' => 25, 'municipality' => 'San Juan de Capistrano', 'state_id' => 2],
		['id' => 26, 'municipality' => 'Santa Ana', 'state_id' => 2],
		['id' => 27, 'municipality' => 'Simón Bolívar', 'state_id' => 2],
		['id' => 28, 'municipality' => 'Simón Rodríguez', 'state_id' => 2],
		['id' => 29, 'municipality' => 'Achaguas', 'state_id' => 3],
		['id' => 30, 'municipality' => 'Biruaca', 'state_id' => 3],
		['id' => 31, 'municipality' => 'Muñóz', 'state_id' => 3],
		['id' => 32, 'municipality' => 'Páez', 'state_id' => 3],
		['id' => 33, 'municipality' => 'Pedro Camejo', 'state_id' => 3],
		['id' => 34, 'municipality' => 'Rómulo Gallegos', 'state_id' => 3],
		['id' => 35, 'municipality' => 'San Fernando', 'state_id' => 3],
		['id' => 36, 'municipality' => 'Atanasio Girardot', 'state_id' => 4],
		['id' => 37, 'municipality' => 'Bolívar', 'state_id' => 4],
		['id' => 38, 'municipality' => 'Camatagua', 'state_id' => 4],
		['id' => 39, 'municipality' => 'Francisco Linares Alcántara', 'state_id' => 4],
		['id' => 40, 'municipality' => 'José Ángel Lamas', 'state_id' => 4],
		['id' => 41, 'municipality' => 'José Félix Ribas', 'state_id' => 4],
		['id' => 42, 'municipality' => 'José Rafael Revenga', 'state_id' => 4],
		['id' => 43, 'municipality' => 'Libertador', 'state_id' => 4],
		['id' => 44, 'municipality' => 'Mario Briceño Iragorry', 'state_id' => 4],
		['id' => 45, 'municipality' => 'Ocumare de la Costa de Oro', 'state_id' => 4],
		['id' => 46, 'municipality' => 'San Casimiro', 'state_id' => 4],
		['id' => 47, 'municipality' => 'San Sebastián', 'state_id' => 4],
		['id' => 48, 'municipality' => 'Santiago Mariño', 'state_id' => 4],
		['id' => 49, 'municipality' => 'Santos Michelena', 'state_id' => 4],
		['id' => 50, 'municipality' => 'Sucre', 'state_id' => 4],
		['id' => 51, 'municipality' => 'Tovar', 'state_id' => 4],
		['id' => 52, 'municipality' => 'Urdaneta', 'state_id' => 4],
		['id' => 53, 'municipality' => 'Zamora', 'state_id' => 4],
		['id' => 54, 'municipality' => 'Alberto Arvelo Torrealba', 'state_id' => 5],
		['id' => 55, 'municipality' => 'Andrés Eloy Blanco', 'state_id' => 5],
		['id' => 56, 'municipality' => 'Antonio José de Sucre', 'state_id' => 5],
		['id' => 57, 'municipality' => 'Arismendi', 'state_id' => 5],
		['id' => 58, 'municipality' => 'Barinas', 'state_id' => 5],
		['id' => 59, 'municipality' => 'Bolívar', 'state_id' => 5],
		['id' => 60, 'municipality' => 'Cruz Paredes', 'state_id' => 5],
		['id' => 61, 'municipality' => 'Ezequiel Zamora', 'state_id' => 5],
		['id' => 62, 'municipality' => 'Obispos', 'state_id' => 5],
		['id' => 63, 'municipality' => 'Pedraza', 'state_id' => 5],
		['id' => 64, 'municipality' => 'Rojas', 'state_id' => 5],
		['id' => 65, 'municipality' => 'Sosa', 'state_id' => 5],
		['id' => 66, 'municipality' => 'Caroní', 'state_id' => 6],
		['id' => 67, 'municipality' => 'Cedeño', 'state_id' => 6],
		['id' => 68, 'municipality' => 'El Callao', 'state_id' => 6],
		['id' => 69, 'municipality' => 'Gran Sabana', 'state_id' => 6],
		['id' => 70, 'municipality' => 'Heres', 'state_id' => 6],
		['id' => 71, 'municipality' => 'Piar', 'state_id' => 6],
		['id' => 72, 'municipality' => 'Angostura (Raúl Leoni)', 'state_id' => 6],
		['id' => 73, 'municipality' => 'Roscio', 'state_id' => 6],
		['id' => 74, 'municipality' => 'Sifontes', 'state_id' => 6],
		['id' => 75, 'municipality' => 'Sucre', 'state_id' => 6],
		['id' => 76, 'municipality' => 'Padre Pedro Chien', 'state_id' => 6],
		['id' => 77, 'municipality' => 'Bejuma', 'state_id' => 7],
		['id' => 78, 'municipality' => 'Carlos Arvelo', 'state_id' => 7],
		['id' => 79, 'municipality' => 'Diego Ibarra', 'state_id' => 7],
		['id' => 80, 'municipality' => 'Guacara', 'state_id' => 7],
		['id' => 81, 'municipality' => 'Juan José', 'state_id' => 7],
		['id' => 82, 'municipality' => 'Libertador', 'state_id' => 7],
		['id' => 83, 'municipality' => 'Los Guayos', 'state_id' => 7],
		['id' => 84, 'municipality' => 'Miranda', 'state_id' => 7],
		['id' => 85, 'municipality' => 'Montalbán', 'state_id' => 7],
		['id' => 86, 'municipality' => 'Naguanagua', 'state_id' => 7],
		['id' => 87, 'municipality' => 'Puerto Cabello', 'state_id' => 7],
		['id' => 88, 'municipality' => 'San Diego', 'state_id' => 7],
		['id' => 89, 'municipality' => 'San Joaquín', 'state_id' => 7],
		['id' => 90, 'municipality' => 'Valencia', 'state_id' => 7],
		['id' => 91, 'municipality' => 'Anzoátegui', 'state_id' => 8],
		['id' => 92, 'municipality' => 'Tinaquillo', 'state_id' => 8],
		['id' => 93, 'municipality' => 'Girardot', 'state_id' => 8],
		['id' => 94, 'municipality' => 'Lima Blanco', 'state_id' => 8],
		['id' => 95, 'municipality' => 'Pao de San Juan Bautista', 'state_id' => 8],
		['id' => 96, 'municipality' => 'Ricaurte', 'state_id' => 8],
		['id' => 97, 'municipality' => 'Rómulo Gallegos', 'state_id' => 8],
		['id' => 98, 'municipality' => 'San Carlos', 'state_id' => 8],
		['id' => 99, 'municipality' => 'Tinaco', 'state_id' => 8],
		['id' => 100, 'municipality' => 'Antonio Díaz', 'state_id' => 9],
		['id' => 101,'municipality' => 'Casacoima', 'state_id' => 9],
		['id' => 102,'municipality' => 'Pedernales', 'state_id' => 9],
		['id' => 103,'municipality' => 'Tucupita', 'state_id' => 9],
		['id' => 104,'municipality' => 'Acosta', 'state_id' => 10],
		['id' => 105,'municipality' => 'Bolívar', 'state_id' => 10],
		['id' => 106,'municipality' => 'Buchivacoa', 'state_id' => 10],
		['id' => 107,'municipality' => 'Cacique Manaure', 'state_id' => 10],
		['id' => 108,'municipality' => 'Carirubana', 'state_id' => 10],
		['id' => 109,'municipality' => 'Colina', 'state_id' => 10],
		['id' => 110,'municipality' => 'Dabajuro', 'state_id' => 10],
		['id' => 111,'municipality' => 'Democracia', 'state_id' => 10],
		['id' => 112,'municipality' => 'Falcón', 'state_id' => 10],
		['id' => 113,'municipality' => 'Federación', 'state_id' => 10],
		['id' => 114,'municipality' => 'Jacura', 'state_id' => 10],
		['id' => 115,'municipality' => 'José Laurencio Silva', 'state_id' => 10],
		['id' => 116,'municipality' => 'Los Taques', 'state_id' => 10],
		['id' => 117,'municipality' => 'Mauroa', 'state_id' => 10],
		['id' => 118,'municipality' => 'Miranda', 'state_id' => 10],
		['id' => 119,'municipality' => 'Monseñor Iturriza', 'state_id' => 10],
		['id' => 120,'municipality' => 'Palmasola', 'state_id' => 10],
		['id' => 121,'municipality' => 'Petit', 'state_id' => 10],
		['id' => 122, 'municipality' => 'Píritu', 'state_id' => 10],
		['id' => 123, 'municipality' => 'San Francisco', 'state_id' => 10],
		['id' => 124, 'municipality' => 'Sucre', 'state_id' => 10],
		['id' => 125, 'municipality' => 'Tocópero', 'state_id' => 10],
		['id' => 126, 'municipality' => 'Unión', 'state_id' => 10],
		['id' => 127, 'municipality' => 'Urumaco', 'state_id' => 10],
		['id' => 128, 'municipality' => 'Zamora', 'state_id' => 10],
		['id' => 129, 'municipality' => 'Camaguán', 'state_id' => 11],
		['id' => 130, 'municipality' => 'Chaguaramas', 'state_id' => 11],
		['id' => 131, 'municipality' => 'El Socorro', 'state_id' => 11],
		['id' => 132, 'municipality' => 'José Félix Ribas', 'state_id' => 11],
		['id' => 133, 'municipality' => 'José Tadeo Monagas', 'state_id' => 11],
		['id' => 134, 'municipality' => 'Juan Germán Roscio', 'state_id' => 11],
		['id' => 135, 'municipality' => 'Julián Mellado', 'state_id' => 11],
		['id' => 136, 'municipality' => 'Las Mercedes', 'state_id' => 11],
		['id' => 137, 'municipality' => 'Leonardo Infante', 'state_id' => 11],
		['id' => 138, 'municipality' => 'Pedro Zaraza', 'state_id' => 11],
		['id' => 139, 'municipality' => 'Ortíz', 'state_id' => 11],
		['id' => 140, 'municipality' => 'San Gerónimo de Guayabal', 'state_id' => 11],
		['id' => 141, 'municipality' => 'San José de Guaribe', 'state_id' => 11],
		['id' => 142, 'municipality' => 'Santa María de Ipire', 'state_id' => 11],
		['id' => 143, 'municipality' => 'Sebastián Francisco de Miranda', 'state_id' => 11],
		['id' => 144, 'municipality' => 'Andrés Eloy Blanco', 'state_id' => 12],
		['id' => 145, 'municipality' => 'Crespo', 'state_id' => 12],
		['id' => 146, 'municipality' => 'Iribarren', 'state_id' => 12],
		['id' => 147, 'municipality' => 'Jiménez', 'state_id' => 12],
		['id' => 148, 'municipality' => 'Morán', 'state_id' => 12],
		['id' => 149, 'municipality' => 'Palavecino', 'state_id' => 12],
		['id' => 150, 'municipality' => 'Simón Planas', 'state_id' => 12],
		['id' => 151, 'municipality' => 'Torres', 'state_id' => 12],
		['id' => 152, 'municipality' => 'Urdaneta', 'state_id' => 12],
		['id' => 179, 'municipality' => 'Alberto Adriani', 'state_id' => 13],
		['id' => 180, 'municipality' => 'Andrés Bello', 'state_id' => 13],
		['id' => 181, 'municipality' => 'Antonio Pinto Salinas', 'state_id' => 13],
		['id' => 182, 'municipality' => 'Aricagua', 'state_id' => 13],
		['id' => 183, 'municipality' => 'Arzobispo Chacón', 'state_id' => 13],
		['id' => 184, 'municipality' => 'Campo Elías', 'state_id' => 13],
		['id' => 185, 'municipality' => 'Caracciolo Parra Olmedo', 'state_id' => 13],
		['id' => 186, 'municipality' => 'Cardenal Quintero', 'state_id' => 13],
		['id' => 187, 'municipality' => 'Guaraque', 'state_id' => 13],
		['id' => 188, 'municipality' => 'Julio César Salas', 'state_id' => 13],
		['id' => 189, 'municipality' => 'Justo Briceño', 'state_id' => 13],
		['id' => 190, 'municipality' => 'Libertador', 'state_id' => 13],
		['id' => 191, 'municipality' => 'Miranda', 'state_id' => 13],
		['id' => 192, 'municipality' => 'Obispo Ramos de Lora', 'state_id' => 13],
		['id' => 193, 'municipality' => 'Padre Noguera', 'state_id' => 13],
		['id' => 194, 'municipality' => 'Pueblo Llano', 'state_id' => 13],
		['id' => 195, 'municipality' => 'Rangel', 'state_id' => 13],
		['id' => 196, 'municipality' => 'Rivas Dávila', 'state_id' => 13],
		['id' => 197, 'municipality' => 'Santos Marquina', 'state_id' => 13],
		['id' => 198, 'municipality' => 'Sucre', 'state_id' => 13],
		['id' => 199, 'municipality' => 'Tovar', 'state_id' => 13],
		['id' => 200, 'municipality' => 'Tulio Febres Cordero', 'state_id' => 13],
		['id' => 201, 'municipality' => 'Zea', 'state_id' => 13],
		['id' => 223, 'municipality' => 'Acevedo', 'state_id' => 14],
		['id' => 224, 'municipality' => 'Andrés Bello', 'state_id' => 14],
		['id' => 225, 'municipality' => 'Baruta', 'state_id' => 14],
		['id' => 226, 'municipality' => 'Brión', 'state_id' => 14],
		['id' => 227, 'municipality' => 'Buroz', 'state_id' => 14],
		['id' => 228, 'municipality' => 'Carrizal', 'state_id' => 14],
		['id' => 229, 'municipality' => 'Chacao', 'state_id' => 14],
		['id' => 230, 'municipality' => 'Cristóbal Rojas', 'state_id' => 14],
		['id' => 231, 'municipality' => 'El Hatillo', 'state_id' => 14],
		['id' => 232, 'municipality' => 'Guaicaipuro', 'state_id' => 14],
		['id' => 233, 'municipality' => 'Independencia', 'state_id' => 14],
		['id' => 234, 'municipality' => 'Lander', 'state_id' => 14],
		['id' => 235, 'municipality' => 'Los Salias', 'state_id' => 14],
		['id' => 236, 'municipality' => 'Páez', 'state_id' => 14],
		['id' => 237, 'municipality' => 'Paz Castillo', 'state_id' => 14],
		['id' => 238, 'municipality' => 'Pedro Gual', 'state_id' => 14],
		['id' => 239, 'municipality' => 'Plaza', 'state_id' => 14],
		['id' => 240, 'municipality' => 'Simón Bolívar', 'state_id' => 14],
		['id' => 241, 'municipality' => 'Sucre', 'state_id' => 14],
		['id' => 242, 'municipality' => 'Urdaneta', 'state_id' => 14],
		['id' => 243, 'municipality' => 'Zamora', 'state_id' => 14],
		['id' => 258, 'municipality' => 'Acosta', 'state_id' => 15],
		['id' => 259, 'municipality' => 'Aguasay', 'state_id' => 15],
		['id' => 260, 'municipality' => 'Bolívar', 'state_id' => 15],
		['id' => 261, 'municipality' => 'Caripe', 'state_id' => 15],
		['id' => 262, 'municipality' => 'Cedeño', 'state_id' => 15],
		['id' => 263, 'municipality' => 'Ezequiel Zamora', 'state_id' => 15],
		['id' => 264, 'municipality' => 'Libertador', 'state_id' => 15],
		['id' => 265, 'municipality' => 'Maturín', 'state_id' => 15],
		['id' => 266, 'municipality' => 'Piar', 'state_id' => 15],
		['id' => 267, 'municipality' => 'Punceres', 'state_id' => 15],
		['id' => 268, 'municipality' => 'Santa Bárbara', 'state_id' => 15],
		['id' => 269, 'municipality' => 'Sotillo', 'state_id' => 15],
		['id' => 270, 'municipality' => 'Uracoa', 'state_id' => 15],
		['id' => 271, 'municipality' => 'Antolín del Campo', 'state_id' => 16],
		['id' => 272, 'municipality' => 'Arismendi', 'state_id' => 16],
		['id' => 273, 'municipality' => 'García', 'state_id' => 16],
		['id' => 274, 'municipality' => 'Gómez', 'state_id' => 16],
		['id' => 275, 'municipality' => 'Maneiro', 'state_id' => 16],
		['id' => 276, 'municipality' => 'Marcano', 'state_id' => 16],
		['id' => 277, 'municipality' => 'Mariño', 'state_id' => 16],
		['id' => 278, 'municipality' => 'Península de Macanao', 'state_id' => 16],
		['id' => 279, 'municipality' => 'Tubores', 'state_id' => 16],
		['id' => 280, 'municipality' => 'Villalba', 'state_id' => 16],
		['id' => 281, 'municipality' => 'Díaz', 'state_id' => 16],
		['id' => 282, 'municipality' => 'Agua Blanca', 'state_id' => 17],
		['id' => 283, 'municipality' => 'Araure', 'state_id' => 17],
		['id' => 284, 'municipality' => 'Esteller', 'state_id' => 17],
		['id' => 285, 'municipality' => 'Guanare', 'state_id' => 17],
		['id' => 286, 'municipality' => 'Guanarito', 'state_id' => 17],
		['id' => 287, 'municipality' => 'Monseñor José Vicente de Unda', 'state_id' => 17],
		['id' => 288, 'municipality' => 'Ospino', 'state_id' => 17],
		['id' => 289, 'municipality' => 'Páez', 'state_id' => 17],
		['id' => 290, 'municipality' => 'Papelón', 'state_id' => 17],
		['id' => 291, 'municipality' => 'San Genaro de Boconoíto', 'state_id' => 17],
		['id' => 292, 'municipality' => 'San Rafael de Onoto', 'state_id' => 17],
		['id' => 293, 'municipality' => 'Santa Rosalía', 'state_id' => 17],
		['id' => 294, 'municipality' => 'Sucre', 'state_id' => 17],
		['id' => 295, 'municipality' => 'Turén', 'state_id' => 17],
		['id' => 296, 'municipality' => 'Andrés Eloy Blanco', 'state_id' => 18],
		['id' => 297, 'municipality' => 'Andrés Mata', 'state_id' => 18],
		['id' => 298, 'municipality' => 'Arismendi', 'state_id' => 18],
		['id' => 299, 'municipality' => 'Benítez', 'state_id' => 18],
		['id' => 300, 'municipality' => 'Bermúdez', 'state_id' => 18],
		['id' => 301, 'municipality' => 'Bolívar', 'state_id' => 18],
		['id' => 302, 'municipality' => 'Cajigal', 'state_id' => 18],
		['id' => 303, 'municipality' => 'Cruz Salmerón Acosta', 'state_id' => 18],
		['id' => 304, 'municipality' => 'Libertador', 'state_id' => 18],
		['id' => 305, 'municipality' => 'Mariño', 'state_id' => 18],
		['id' => 306, 'municipality' => 'Mejía', 'state_id' => 18],
		['id' => 307, 'municipality' => 'Montes', 'state_id' => 18],
		['id' => 308, 'municipality' => 'Ribero', 'state_id' => 18],
		['id' => 309, 'municipality' => 'Sucre', 'state_id' => 18],
		['id' => 310, 'municipality' => 'Valdéz', 'state_id' => 18],
		['id' => 341, 'municipality' => 'Andrés Bello', 'state_id' => 19],
		['id' => 342, 'municipality' => 'Antonio Rómulo Costa', 'state_id' => 19],
		['id' => 343, 'municipality' => 'Ayacucho', 'state_id' => 19],
		['id' => 344, 'municipality' => 'Bolívar', 'state_id' => 19],
		['id' => 345, 'municipality' => 'Cárdenas', 'state_id' => 19],
		['id' => 346, 'municipality' => 'Córdoba', 'state_id' => 19],
		['id' => 347, 'municipality' => 'Fernández Feo', 'state_id' => 19],
		['id' => 348, 'municipality' => 'Francisco de Miranda', 'state_id' => 19],
		['id' => 349, 'municipality' => 'García de Hevia', 'state_id' => 19],
		['id' => 350, 'municipality' => 'Guásimos', 'state_id' => 19],
		['id' => 351, 'municipality' => 'Independencia', 'state_id' => 19],
		['id' => 352, 'municipality' => 'Jáuregui', 'state_id' => 19],
		['id' => 353, 'municipality' => 'José María Vargas', 'state_id' => 19],
		['id' => 354, 'municipality' => 'Junín', 'state_id' => 19],
		['id' => 355, 'municipality' => 'Libertad', 'state_id' => 19],
		['id' => 356, 'municipality' => 'Libertador', 'state_id' => 19],
		['id' => 357, 'municipality' => 'Lobatera', 'state_id' => 19],
		['id' => 358, 'municipality' => 'Michelena', 'state_id' => 19],
		['id' => 359, 'municipality' => 'Panamericano', 'state_id' => 19],
		['id' => 360, 'municipality' => 'Pedro María Ureña', 'state_id' => 19],
		['id' => 361, 'municipality' => 'Rafael Urdaneta', 'state_id' => 19],
		['id' => 362, 'municipality' => 'Samuel Darío Maldonado', 'state_id' => 19],
		['id' => 363, 'municipality' => 'San Cristóbal', 'state_id' => 19],
		['id' => 364, 'municipality' => 'Seboruco', 'state_id' => 19],
		['id' => 365, 'municipality' => 'Simón Rodríguez', 'state_id' => 19],
		['id' => 366, 'municipality' => 'Sucre', 'state_id' => 19],
		['id' => 367, 'municipality' => 'Torbes', 'state_id' => 19],
		['id' => 368, 'municipality' => 'Uribante', 'state_id' => 19],
		['id' => 369, 'municipality' => 'San Judas Tadeo', 'state_id' => 19],
		['id' => 370, 'municipality' => 'Andrés Bello', 'state_id' => 20],
		['id' => 371, 'municipality' => 'Boconó', 'state_id' => 20],
		['id' => 372, 'municipality' => 'Bolívar', 'state_id' => 20],
		['id' => 373, 'municipality' => 'Candelaria', 'state_id' => 20],
		['id' => 374, 'municipality' => 'Carache', 'state_id' => 20],
		['id' => 375, 'municipality' => 'Escuque', 'state_id' => 20],
		['id' => 376, 'municipality' => 'José Felipe Márquez Cañizalez', 'state_id' => 20],
		['id' => 377, 'municipality' => 'Juan Vicente Campos Elías', 'state_id' => 20],
		['id' => 378, 'municipality' => 'La Ceiba', 'state_id' => 20],
		['id' => 379, 'municipality' => 'Miranda', 'state_id' => 20],
		['id' => 380, 'municipality' => 'Monte Carmelo', 'state_id' => 20],
		['id' => 381, 'municipality' => 'Motatán', 'state_id' => 20],
		['id' => 382, 'municipality' => 'Pampán', 'state_id' => 20],
		['id' => 383, 'municipality' => 'Pampanito', 'state_id' => 20],
		['id' => 384, 'municipality' => 'Rafael Rangel', 'state_id' => 20],
		['id' => 385, 'municipality' => 'San Rafael de Carvajal', 'state_id' => 20],
		['id' => 386, 'municipality' => 'Sucre', 'state_id' => 20],
		['id' => 387, 'municipality' => 'Trujillo', 'state_id' => 20],
		['id' => 388, 'municipality' => 'Urdaneta', 'state_id' => 20],
		['id' => 389, 'municipality' => 'Valera', 'state_id' => 20],
		['id' => 390, 'municipality' => 'Vargas', 'state_id' => 21],
		['id' => 391, 'municipality' => 'Arístides Bastidas', 'state_id' => 22],
		['id' => 392, 'municipality' => 'Bolívar', 'state_id' => 22],
		['id' => 407, 'municipality' => 'Bruzual', 'state_id' => 22],
		['id' => 408, 'municipality' => 'Cocorote', 'state_id' => 22],
		['id' => 409, 'municipality' => 'Independencia', 'state_id' => 22],
		['id' => 410, 'municipality' => 'José Antonio Páez', 'state_id' => 22],
		['id' => 411, 'municipality' => 'La Trinidad', 'state_id' => 22],
		['id' => 412, 'municipality' => 'Manuel Monge', 'state_id' => 22],
		['id' => 413, 'municipality' => 'Nirgua', 'state_id' => 22],
		['id' => 414, 'municipality' => 'Peña', 'state_id' => 22],
		['id' => 415, 'municipality' => 'San Felipe', 'state_id' => 22],
		['id' => 416, 'municipality' => 'Sucre', 'state_id' => 22],
		['id' => 417, 'municipality' => 'Urachiche', 'state_id' => 22],
		['id' => 418, 'municipality' => 'José Joaquín Veroes', 'state_id' => 22],
		['id' => 441, 'municipality' => 'Almirante Padilla', 'state_id' => 23],
		['id' => 442, 'municipality' => 'Baralt', 'state_id' => 23],
		['id' => 443, 'municipality' => 'Cabimas', 'state_id' => 23],
		['id' => 444, 'municipality' => 'Catatumbo', 'state_id' => 23],
		['id' => 445, 'municipality' => 'Colón', 'state_id' => 23],
		['id' => 446, 'municipality' => 'Francisco Javier Pulgar', 'state_id' => 23],
		['id' => 447, 'municipality' => 'Páez', 'state_id' => 23],
		['id' => 448, 'municipality' => 'Jesús Enrique Losada', 'state_id' => 23],
		['id' => 449, 'municipality' => 'Jesús María Semprún', 'state_id' => 23],
		['id' => 450, 'municipality' => 'La Cañada de Urdaneta', 'state_id' => 23],
		['id' => 451, 'municipality' => 'Lagunillas', 'state_id' => 23],
		['id' => 452, 'municipality' => 'Machiques de Perijá', 'state_id' => 23],
		['id' => 453, 'municipality' => 'Mara', 'state_id' => 23],
		['id' => 454, 'municipality' => 'Maracaibo', 'state_id' => 23],
		['id' => 455, 'municipality' => 'Miranda', 'state_id' => 23],
		['id' => 456, 'municipality' => 'Rosario de Perijá', 'state_id' => 23],
		['id' => 457, 'municipality' => 'San Francisco', 'state_id' => 23],
		['id' => 458, 'municipality' => 'Santa Rita', 'state_id' => 23],
		['id' => 459, 'municipality' => 'Simón Bolívar', 'state_id' => 23],
		['id' => 460, 'municipality' => 'Sucre', 'state_id' => 23],
		['id' => 461, 'municipality' => 'Valmore Rodríguez', 'state_id' => 23],
		['id' => 462, 'municipality' => 'Libertador', 'state_id' => 24],
		]);
    }
}