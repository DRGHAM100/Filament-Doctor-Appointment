<?php

namespace App\Livewire\Patient\Appointments;

use App\Models\Appointment;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class MyAppointments extends Component
{
    use WithPagination;
    public $perPage = 5;
    public $search = '';
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.patient.appointments.my-appointments',[
            'all_appointments' => Appointment::search($this->search)
            ->with('patient','doctor')
            ->where('patient_id',$this->user->id)
            ->paginate($this->perPage)
        ]);
    }
}
