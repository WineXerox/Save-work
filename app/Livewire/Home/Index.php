<?php

namespace App\Livewire\Home;

use App\Models\Work;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $take = 5;

    public function render()
    {
        $new = Work::where('status', 'new')->latest()->take($this->take)->get();
        $newCount = Work::where('status', 'new')->count();
        $proceedCount = Work::where('status', 'proceed')->count();
        $successCount = Work::where('status', 'success')->count();
        $cancelCount = Work::where('status', 'cancel')->count();
        
        return view('livewire.home.index', [
            'new' => $new,
            'newCount' => $newCount,
            'proceedCount' => $proceedCount,
            'successCount' => $successCount,
            'cancelCount' => $cancelCount,
        ]);
    }
}
