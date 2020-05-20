<?php namespace App\Database\Seeds;

class WidgetSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $widgets = [
            [
                'title' => 'Best Widget',
                'description' => 'The best widget ever!',
                'price' => '45'
            ],
            [
                'title' => 'Widget',
                'description' => 'A widget',
                'price' => '29'
            ],
            [
                'title' => 'Barely Widget',
                'description' => 'Widgetish really...',
                'price' => '19'
            ],
        ];

        // Using Query Builder
        foreach($widgets as $widget){
            $this->db->table('widgets')->insert($widget);
        }
    }
}