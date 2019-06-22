<?php

use App\Car;
use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
          'Pontiac' => ['Gasoline',1926,'GT-37','Labai gera masina'],
          'Audi' => ['Diesel', 2004,'A6','ne tokia gera masina']
        ];

        foreach ($roles as $name => $description) {
          $c_obj = new Car();
          $c_obj->model = $name;
          $c_obj->marke = $description[2];
          $c_obj->fuel_type = $description[0];
          $c_obj->year = $description[1];
          $c_obj->description = $description[3];
          $c_obj->save();
        }
    }
}
