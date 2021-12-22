<?php

namespace Database\Seeders;

use App\Models\Posts;
use App\Models\User;
use App\Models\Categories;
use App\Models\Report;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Posts::create([
        //     'tittle' => 'Perbaikan Modul DeepSea',
        //     'to' => 'Elektronika',
        //     'categories_id' => '4',
        //     'user_id' => '1',
        //     'datestart' => '12 Oktober 2022',
        //     'dateend' => '20 Januari 2023',
        //     'deskripsi' => 'Lorem ipsum lorem bla bla baaldolor sit, amet consectetur adipisicing elit. Atque facere cumque amet, ad nemo assumenda quas, illo at voluptatum similique eligendi. Neque, nemo? Iste minus possimus sunt adipisci perspiciatis, dolore dicta distinctio eos rerum libero cupiditate necessitatibus aliquid incidunt repudiandae atque eveniet temporibus nesciunt amet ab ratione. Consequuntur quos architecto nulla deleniti assumenda iusto quis soluta autem, iste et quisquam non, eligendi qui doloremque. Blanditiis corporis nemo tenetur illo ducimus. Recusandae odio saepe velit suscipit officiis atque ad totam qui illum cumque maxime aliquid tenetur temporibus aperiam doloremque iste error nisi neque voluptates mollitia dignissimos, fugiat possimus est! Quasi, cum?,',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque facere cumque amet, ad nemo assumenda quas, illo at voluptatum similique eligendi. Neque, nemo? Iste minus possimus sunt adipisci perspiciatis',
        //     'slug' => 'perbaikan-modul-deepsea',
        // ]);

        // Posts::create([
        //     'tittle' => 'Perbaikan Modul Fire Alarm',
        //     'to' => 'Elektronika',
        //     'categories_id' => '4',
        //     'user_id' => '1',
        //     'datestart' => '12 februari 2022',
        //     'dateend' => '20 Januari 2023',
        //     'deskripsi' => 'Lorem ipsum lorem bla bla baaldolor sit, amet consectetur adipisicing elit. Atque facere cumque amet, ad nemo assumenda quas, illo at voluptatum similique eligendi. Neque, nemo? Iste minus possimus sunt adipisci perspiciatis, dolore dicta distinctio eos rerum libero cupiditate necessitatibus aliquid incidunt repudiandae atque eveniet temporibus nesciunt amet ab ratione. Consequuntur quos architecto nulla deleniti assumenda iusto quis soluta autem, iste et quisquam non, eligendi qui doloremque. Blanditiis corporis nemo tenetur illo ducimus. Recusandae odio saepe velit suscipit officiis atque ad totam qui illum cumque maxime aliquid tenetur temporibus aperiam doloremque iste error nisi neque voluptates mollitia dignissimos, fugiat possimus est! Quasi, cum?,',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque facere cumque amet, ad nemo assumenda quas, illo at voluptatum similique eligendi. Neque, nemo? Iste minus possimus sunt adipisci perspiciatis',
        //     'slug' => 'perbaikan-modul-fire-alarm',
        // ]);

        // Posts::create([
        //     'tittle' => 'Instalasi Panel LVMDV',
        //     'to' => 'Elektrikal',
        //     'categories_id' => '2',
        //     'user_id' => '1',
        //     'datestart' => '12 Maeret 2022',
        //     'dateend' => '20 Desember 2023',
        //     'deskripsi' => 'Lorem ipsum lorem bla bla baaldolor sit, amet consectetur adipisicing elit. Atque facere cumque amet, ad nemo assumenda quas, illo at voluptatum similique eligendi. Neque, nemo? Iste minus possimus sunt adipisci perspiciatis, dolore dicta distinctio eos rerum libero cupiditate necessitatibus aliquid incidunt repudiandae atque eveniet temporibus nesciunt amet ab ratione. Consequuntur quos architecto nulla deleniti assumenda iusto quis soluta autem, iste et quisquam non, eligendi qui doloremque. Blanditiis corporis nemo tenetur illo ducimus. Recusandae odio saepe velit suscipit officiis atque ad totam qui illum cumque maxime aliquid tenetur temporibus aperiam doloremque iste error nisi neque voluptates mollitia dignissimos, fugiat possimus est! Quasi, cum?,',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque facere cumque amet, ad nemo assumenda quas, illo at voluptatum similique eligendi. Neque, nemo? Iste minus possimus sunt adipisci perspiciatis',
        //     'slug' => 'instalasi-panel-lvmdv',
        // ]);

        // Posts::create([
        //     'tittle' => 'Instalasi Plumbing',
        //     'to' => 'Mekanikal',
        //     'categories_id' => '1',
        //     'user_id' => '1',
        //     'datestart' => '12 Desember 2022',
        //     'dateend' => '20 Desember 2023',
        //     'deskripsi' => 'Lorem ipsum lorem bla bla baaldolor sit, amet consectetur adipisicing elit. Atque facere cumque amet, ad nemo assumenda quas, illo at voluptatum similique eligendi. Neque, nemo? Iste minus possimus sunt adipisci perspiciatis, dolore dicta distinctio eos rerum libero cupiditate necessitatibus aliquid incidunt repudiandae atque eveniet temporibus nesciunt amet ab ratione. Consequuntur quos architecto nulla deleniti assumenda iusto quis soluta autem, iste et quisquam non, eligendi qui doloremque. Blanditiis corporis nemo tenetur illo ducimus. Recusandae odio saepe velit suscipit officiis atque ad totam qui illum cumque maxime aliquid tenetur temporibus aperiam doloremque iste error nisi neque voluptates mollitia dignissimos, fugiat possimus est! Quasi, cum?,',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque facere cumque amet, ad nemo assumenda quas, illo at voluptatum similique eligendi. Neque, nemo? Iste minus possimus sunt adipisci perspiciatis',
        //     'slug' => 'instalasi-plumbing',
        // ]);

        // Posts::create([
        //     'tittle' => 'Instalasi AC Standing',
        //     'to' => 'HVAC',
        //     'categories_id' => '3',
        //     'user_id' => '1',
        //     'datestart' => '12 November 2022',
        //     'dateend' => '20 Desember 2023',
        //     'deskripsi' => 'Lorem ipsum lorem bla bla baaldolor sit, amet consectetur adipisicing elit. Atque facere cumque amet, ad nemo assumenda quas, illo at voluptatum similique eligendi. Neque, nemo? Iste minus possimus sunt adipisci perspiciatis, dolore dicta distinctio eos rerum libero cupiditate necessitatibus aliquid incidunt repudiandae atque eveniet temporibus nesciunt amet ab ratione. Consequuntur quos architecto nulla deleniti assumenda iusto quis soluta autem, iste et quisquam non, eligendi qui doloremque. Blanditiis corporis nemo tenetur illo ducimus. Recusandae odio saepe velit suscipit officiis atque ad totam qui illum cumque maxime aliquid tenetur temporibus aperiam doloremque iste error nisi neque voluptates mollitia dignissimos, fugiat possimus est! Quasi, cum?,',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque facere cumque amet, ad nemo assumenda quas, illo at voluptatum similique eligendi. Neque, nemo? Iste minus possimus sunt adipisci perspiciatis',
        //     'slug' => 'instalasi-ac-standing',
        // ]);

        // REAL
        Categories::create([
            'name' => 'Mekanikal',
            'slug' => 'mekanikal',
            'img_category' => 'mechanical engineering'
        ]);

        Categories::create([
            'name' => 'Elektrikal',
            'slug' => 'elektrikal',
            'img_category' => 'electricity'
        ]);
        Categories::create([
            'name' => 'hvac',
            'slug' => 'hvac',
            'img_category' => 'air conditioner'
        ]);

        Categories::create([
            'name' => 'Elektronika',
            'slug' => 'elektronika',
            'img_category' => 'electronics'
        ]);

        User::factory(5)->create();
        Posts::factory(20)->create();
        Report::factory(10)->create();
        // User::create([
        //     'name' => 'Nasa Wiko Permana',
        //     'email' => 'nasawikopermana@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
    }
}
