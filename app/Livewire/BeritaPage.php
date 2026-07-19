<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Article;

class BeritaPage extends Component
{
    use WithPagination;

    public $detailBerita = null;

    public function lihatBerita($id)
    {
        $this->detailBerita = Article::find($id);
    }

    public function tutupModal()
    {
        $this->detailBerita = null;
    }

    public function render()
    {
        // Menampilkan 6 berita per halaman
        $semuaBerita = Article::orderBy('tanggal_publikasi', 'desc')->paginate(6);

        return view('livewire.berita-page', compact('semuaBerita'));
    }
}
