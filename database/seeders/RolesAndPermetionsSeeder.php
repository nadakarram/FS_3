<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermetionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //?product
    //?category
    //?offers
    //?order
    //?review
    public function run(): void
    {
        // Permission::create(["name" =>"create_product"]);
        // Permission::create(["name" =>"delete_product"]);
        // Permission::create(["name" =>"update_product"]);
        // Permission::create(["name" =>"show_product"]);
        // //?______________________________________
        // Permission::create(["name" =>"create_category"]);
        // Permission::create(["name" =>"delete_category"]);
        // Permission::create(["name" =>"update_category"]);
        // Permission::create(["name" =>"show_category"]);
        // //?______________________________________
        // Permission::create(["name" =>"create_offer"]);
        // Permission::create(["name" =>"delete_offer"]);
        // Permission::create(["name" =>"update_offer"]);
        // Permission::create(["name" =>"show_offer"]);
        // //?______________________________________
        // Permission::create(["name" =>"create_order"]);
        // Permission::create(["name" =>"delete_order"]);
        // Permission::create(["name" =>"update_order"]);
        // Permission::create(["name" =>"show_order"]);
        // //?______________________________________
        // Permission::create(["name" =>"create_review"]);
        // Permission::create(["name" =>"delete_review"]);
        // Permission::create(["name" =>"update_review"]);
        // Permission::create(["name" =>"show_review"]);
        Permission::create(["name"=>"super_admin"]);

        // $user = Role::create(["name" => "user"]);
        // $user->givePermissionTo([
        //     "show_product",
        //     "show_category",
        //     "show_offer",
        //     "show_order",
        //     "show_review",
        //     "create_order",
        //     "update_order",
        //     "delete_order",
        //     "create_review",
        //     "update_review",
        //     "delete_review",
            
            

        // ]);

        
$role = Role::findByName(name: 'admin');
        $role->givePermissionTo(Permission::all()->except(["create_order,update_review","super_admin"]));
       
        

    }
}
