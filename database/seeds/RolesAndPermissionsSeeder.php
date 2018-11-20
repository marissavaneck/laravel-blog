<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
public function run()
{
// Reset cached roles and permissions
app()['cache']->forget('spatie.permission.cache');

// create permissions
Permission::create(['name' => 'edit products']);
Permission::create(['name' => 'delete products']);
Permission::create(['name' => 'create products']);


    Permission::create(['name' => 'edit reviews']);
    Permission::create(['name' => 'delete reviews']);
    Permission::create(['name' => 'create reviews']);


// create roles and assign created permissions

$role = Role::create(['name' => 'customer']);
$role->givePermissionTo('create reviews');

$role = Role::create(['name' => 'moderator']);
    $role->givePermissionTo(['create products', 'edit products']);
$role->givePermissionTo(['create reviews', 'edit reviews']);

$role = Role::create(['name' => 'owner']);
$role->givePermissionTo(Permission::all());
}
}