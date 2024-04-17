<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Cars extends Seeder
{
    public function run()
    {
        $example_data = [
            [
                'car_brand' => 'Brabus',
                'car_name' => 'Bus',
                'color_hex' => 'ffffff',
                'comments' => '',
                'car_type_id' => 20,
                'created_at' => ['created_at' => date('Y-m-d H:i:s')],
                'updated_at' => ['updated_at' => date('Y-m-d H:i:s')],
            ]
        ];
    
        $CarModel = new \App\Models\Cars();
    
        foreach ($example_data as $entry_id => $data) {
            if ($CarModel->insert($data) === false) {
                echo "Errors on entry_id ${entry_id}:\n";
                print_r($CarModel->errors());
            }
        }
    }
}