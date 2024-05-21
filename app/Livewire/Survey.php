<?php

namespace App\Livewire;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\View\View;
use Livewire\Component;

class Survey extends Component
{
    public $questions;
    public $answers;
    public $sidebar;
    public $score = 0;

    public function mount(): void
    {
        $id = request()->survey ?? 1;

        // questions
        $this->questions = Question::query()
            ->with('answers')
            ->where('questions.parent_id', $id)
            ->where('type', 1)
            ->orderBy('order')
            ->get()
            ->toArray();

        // answers
        $this->answers = Answer::query()
            ->where('user_id', auth()->id())
            ->pluck('answer_id')
            ->toArray();

        // sidebar
        $this->sidebar = $this->createSidebar();

        // calculate score
        if (count($this->answers) > 0) {
            $this->score = $this->calculateScore($id, count($this->questions));
        }
    }

    public function render(): View
    {
        return view('livewire.survey');
    }

    public function answer($parentId, $questionId, $answerId, $score): void
    {
        $saveAnswer = Answer::query()->updateOrCreate([
            'parent_id' => $parentId,
            'question_id' => $questionId,
            'user_id' => auth()->id()
        ], ['answer_id' => $answerId, 'score' => $score]);

       if ($saveAnswer) {
           $this->sidebar = $this->createSidebar();
           $this->score = $this->calculateScore($parentId, count($this->questions));
           $this->dispatch('success', ['type' => 'success',  'message' => 'Your answer has been saved!']);
       }
    }

    private function answersCount($id): int
    {
        return Answer::query()->where('parent_id', $id)->count();
    }

    private function createSidebar(): array
    {
        $datas = Question::query()
            ->with('answers')
            ->where('type', 0)
            ->orderBy('order')
            ->get()
            ->toArray();

        $siderbar = [];
        foreach ($datas as $data) {
            $siderbar[] = array_merge($data, ['answerCount' => $this->answersCount($data['id'])]);
        }

        return $siderbar;
    }

    private function calculateScore($id, $totalQuestions): float
    {
        $scoreTotal = Answer::query()->where('parent_id', $id)->sum('score');
        return number_format((int)$scoreTotal / $totalQuestions,1);
    }
}
