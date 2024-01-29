<?php

namespace App\Livewire;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $from = "";
    public $to = "";
    public $search="";
    public function render()
    {
        $query = Post::query();
        if ($this->from) {

            $query->where('created_at', '>=', $this->from);
        }

        if ($this->to) {

            $query->where('created_at', '<=', $this->to);
        }
        if($this->search){
            $query->whereHas('user', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            });
        }
        $posts = $query->latest()->paginate(5);
        return view('livewire.post-table',compact('posts'));
    }
    public function refreshComponent()
    {
        $this->render(); // Manually trigger a render when the date changes
    }
}
