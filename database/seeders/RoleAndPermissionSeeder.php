<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Spatie önbelleğini temizle (Çakışma olmaması için)
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // 1. Rolleri Oluştur
        $superAdmin = Role::updateOrCreate(['name' => 'super_admin']);
        $firmaAdmin = Role::updateOrCreate(['name' => 'firma_admin']);
        $tekniker   = Role::updateOrCreate(['name' => 'tekniker']);
        $musteri    = Role::updateOrCreate(['name' => 'musteri']);

        // 2. Örnek İzinler Oluştur
        Permission::updateOrCreate(['name' => 'firmaları yönet']);
        Permission::updateOrCreate(['name' => 'asansörleri yönet']);
        Permission::updateOrCreate(['name' => 'bakım yap']);

        // 3. İzinleri Rollere Ata
        $superAdmin->givePermissionTo(Permission::all());
        $tekniker->givePermissionTo('asansörleri yönet', 'bakım yap');

        // 4. Test İçin Super Admin Kullanıcısı Oluştur
        $user = User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Süper Yönetici',
                'password' => Hash::make('password'), // Şifre: password
            ]
        );

        $user->assignRole($superAdmin);

        $this->command->info('Roller (super_admin, firma_admin, tekniker, musteri) başarıyla oluşturuldu.');
    }
}
