<?php

namespace App\Livewire\Admin;

use App\Models\User;
use App\Models\LawyerProfile;
use App\Models\Question;
use App\Models\QuestionReply;
use App\Models\Article;
use Livewire\Component;

class Dashboard extends Component
{
    public $isViewQuestion = false;
    public $selectedQuestion;
    public $replies;
    public function render()
    {
        $totalUsers = User::count();
        $approvedLawyers = LawyerProfile::where('status', 'accepted')->count();
        $pendingRequests = LawyerProfile::where('status', 'pending')->count();
        $totalQuestions = Question::count();
        $totalAnswers = QuestionReply::count();
        $totalArticles = Article::count();

        $recentQuestions = Question::with('owner')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $recentLawyerRequests = LawyerProfile::where('status', 'pending')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        
        return view('livewire.admin.dashboard', [
            'totalUsers' => $totalUsers,
            'approvedLawyers' => $approvedLawyers,
            'pendingRequests' => $pendingRequests,
            'totalQuestions' => $totalQuestions,
            'totalAnswers' => $totalAnswers,
            'totalArticles' => $totalArticles,
            'recentQuestions' => $recentQuestions,
            'recentLawyerRequests' => $recentLawyerRequests,
            
        ]);

    }
     public function approveRequest($lawyerId)
    {
        $lawyer = LawyerProfile::findOrFail($lawyerId);
        $lawyer->status = 'accepted';
        $lawyer->save();

        // Also update the user's status to active
        $lawyer->user->status = 'active';
        $lawyer->user->save();

        session()->flash('success', 'Request approved successfully!');
        $this->dispatch('action-completed');
    }

    public function rejectRequest($lawyerId)
    {
        $lawyer = LawyerProfile::findOrFail($lawyerId);
        $lawyer->status = 'rejected';
        $lawyer->save();

        session()->flash('success', 'Request rejected successfully!');
    }
    public function viewQuestion($QuestionId)
    { 
        $this->isViewQuestion = true;
        $this->selectedQuestion = Question::find($QuestionId);
        $this->replies=$this->selectedQuestion->replies;
    }
    public function closeViewQuestion()
    {
        $this->isViewQuestion = false;
    }
    public function deleteReply($replyId)
    {
        $reply = \App\Models\QuestionReply::findOrFail($replyId);
        $reply->delete();
        
        // Refresh the selected question's replies
        $this->selectedQuestion->refresh();
        $this->replies = $this->selectedQuestion->replies;

        session()->flash('success', 'Reply deleted successfully.');
    }
}
