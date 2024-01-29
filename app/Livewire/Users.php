<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $from = "";
    public $to = "";
    public $search="";
    public function render()
    {
        $query = User::query();

        if ($this->from) {

            $query->where('created_at', '>=', $this->from);
        }

        if ($this->to) {

            $query->where('created_at', '<=', $this->to);
        }
        if($this->search){
            $query->where('name', 'like', "%$this->search%");
        }

        $users = $query->latest()->paginate(5);

        return view('livewire.users', compact('users'));
    }
    public function refreshComponent()
    {
        $this->render(); // Manually trigger a render when the date changes
    }
}
