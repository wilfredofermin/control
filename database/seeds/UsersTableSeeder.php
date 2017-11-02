<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Puesto;
use App\Sucursal;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        User::create([
            'estado'=>1,
            'name'=>'Mariela Mejaa',
            'email' => 'm.mejia@clubbodyshop.com',
            'role'=>1,
            'sucursal'=>'Naco',
            'puesto'=>'Recursas Humanos',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'estado'=>1,
            'name'=>'Wilfredo Fermin',
            'email' => 'w.fermin@clubbodyshop.com',
            'role'=>1,
            'sucursal'=>'Naco',
            'puesto'=>'Encargado de IT',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'estado'=>1,
            'name'=>'Newton Burgos',
            'email' => 'n.burgos@clubbodyshop.com',
            'role'=>1,
            'sucursal'=>'Naco',
            'puesto'=>'Gerente Tecnologia',
            'password' => bcrypt('12345'),
        ]);
        Puesto::create([
            'estado'=>1,
            'puesto'=>'Ejecutivo Membresias',
        ]);
        Puesto::create([
            'estado'=>1,
            'puesto'=>'Supervisor de Operaciones',
        ]);
        Puesto::create([
            'estado'=>1,
            'puesto'=>'Encargado de IT',
        ]);
        Puesto::create([
            'estado'=>1,
            'puesto'=>'Gerente Tecnologia',
        ]);

        Puesto::create([
            'estado'=>1,
            'puesto'=>'Supervisor de Operaciones',
        ]);
        Puesto::create([
            'estado'=>1,
            'puesto'=>'Conserje',
        ]);
        Puesto::create([
            'estado'=>1,
            'puesto'=>'Asistente',
        ]);
        Sucursal::create([
            'estado'=>1,
            'Sucursal'=>'Naco',
        ]);
        Sucursal::create([
            'estado'=>1,
            'Sucursal'=>'Bella Vista',
        ]);
        Sucursal::create([
            'estado'=>1,
            'Sucursal'=>'Arroyo Hondo',
        ]);
        Sucursal::create([
            'estado'=>1,
            'Sucursal'=>'Santiago',
        ]);
    }
}
