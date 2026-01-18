<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\LawyerProfile;

class LawyersRequests extends Component
{

    public function render()
    {
        $lawyers = LawyerProfile::with('user.specializations')->get();

        return view('livewire.admin.lawyers-requests', [
            'lawyers' => $lawyers
        ]);
    }

    public function approveRequest($lawyerId)
    {
        $lawyer = LawyerProfile::findOrFail($lawyerId);
        $lawyer->status = 'accepted';
        $lawyer->save();

        $this->dispatch('success', 'Request approved successfully!');
    }

    public function rejectRequest($lawyerId)
    {
        $lawyer = LawyerProfile::findOrFail($lawyerId);
        $lawyer->status = 'rejected';
        $lawyer->save();

        $this->dispatch('success', 'Request rejected successfully!');
    }
}
