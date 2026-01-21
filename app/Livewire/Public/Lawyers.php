<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\LawyerProfile;

class Lawyers extends Component
{
    public $search;
    public $categoryFilter;
    
    public function render()
    {
        $lawyers = LawyerProfile::query()
            ->when($this->search, function ($query) {
                $query->whereHas('user', function ($q) {
                    $q->where('name', 'like', "%{$this->search}%");
                });
            })
            ->when($this->categoryFilter, function ($query)  {
                $query->whereHas('categories', function ($q) {
                    $q->where('categories.id', $this->categoryFilter);
                });
            })
            ->get();
            
        $categories = \App\Models\Category::all();
        
        return view('livewire.public.lawyers', compact('lawyers', 'categories'));
    }
}
