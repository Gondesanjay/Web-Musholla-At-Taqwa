<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Gallery;

class GaleriPage extends Component
{
    use WithPagination;

    public function render()
    {
        // Menampilkan 16 galeri per halaman
        $semuaGaleri = Gallery::orderBy('created_at', 'desc')->paginate(8);

        return view('livewire.galeri-page', compact('semuaGaleri'));
    }
}
