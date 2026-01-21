<?php

namespace App\Livewire\Lawyer;

use App\Models\Question;
use Livewire\Component;

class EditAnswer extends Component
{
      public $replyId;
       public $answer;

    public function mount($id)
    {
        $this->replyId = $id;
        $this->answer = "This is a placeholder answer content for editing. Backend logic is disabled."; 
    }
    public function render()
    {
        // Dummy data for frontend demo
        $question = new \App\Models\Question();
        $question->title = "Demo Question Title";
        $question->description = "This is a demo description for the question you are answering.";
        $question->setRelation('category', new \App\Models\Category(['name' => 'Demo Category']));
        $question->setRelation('owner', new \App\Models\User(['name' => 'Demo User']));
        $question->created_at = now();

        return view('livewire.lawyer.edit-answer', compact('question'));
    }
    public function update()
    {
        $this->validate([
            'answer' => 'required|string|min:3',
        ]);
        
        $this->dispatch('refreshAnswers');
       return redirect()->route('lawyer.answers.index')->with('success', 'Your answer has been updated successfully!');
    }
}
