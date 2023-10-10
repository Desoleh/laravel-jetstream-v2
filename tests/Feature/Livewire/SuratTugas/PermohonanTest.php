<?php

namespace Tests\Feature\Livewire\SuratTugas;

use App\Livewire\SuratTugas\Permohonan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PermohonanTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Permohonan::class)
            ->assertStatus(200);
    }
}
