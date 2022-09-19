<?php

namespace Tests\Feature\Admin;

use App\Models\Beras;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProdukTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_produk_page()
    {
        $response = $this->get('/admin/produk');

        $response->assertSee("Produk");
        $response->assertSee("Data Produk");
        $response->assertSee("Nama Beras");
        $response->assertSee("Harga");
        $response->assertSee("Berat");
        $response->assertSee("Foto");
        $response->assertSee("Keterangan");
        $response->assertSee("Action");
        $response->assertSee("Tambah Data");

        $response->assertStatus(200);
    }

    public function test_create_produk_page()
    {
        $response = $this->get('/admin/produk/create');

        $response->assertSee('Tambah Produk');
        $response->assertSee('Nama Beras');
        $response->assertSee('Harga');
        $response->assertSee('Berat');
        $response->assertSee('Foto');
        $response->assertSee('Keterangan');
        $response->assertSee('Submit');

        $response->assertStatus(200);
    }

    public function test_add_data_produk()
    {
        $response = $this->followingRedirects()->post('/admin/produk', [
            'nama_beras' => 'Beras Fortune',
            'hargaberas' => 60000,
            'berat' => 5,
            'keterangan' => 'Beras Fortune 5 kg',
            'foto' => NULL
        ]);
        //redirect to home
        $response->assertStatus(200);
    }

    public function test_edit_data_produk()
    {
        $id = 2;
        $response = $this->get('/admin/produk/' . $id . '/edit');

        $response->assertSee('Edit Produk');
        $response->assertSee('Nama Beras');
        $response->assertSee('Harga');
        $response->assertSee('Berat');
        $response->assertSee('Foto');
        $response->assertSee('Keterangan');
        $response->assertSee('Submit');

        $response->assertStatus(200);
    }

    // public function test_delete_produk()
    // {
    //     $data = Beras::find(1);

    //     $this->followingRedirects()->delete($data->id);
    //     $this->assertDatabaseHas('id', $data->toArray());

    //     $this->assertTrue(true);
    // }
}
