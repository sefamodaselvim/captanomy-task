<div class="py-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="md:flex">
                    <livewire:survey-siderbar :sidebar="$sidebar" />
                    <div class="p-1 text-medium text-gray-500 dark:text-gray-400 rounded-lg w-full">
                        @forelse($questions as $question)
                            <h3 class="mb-4 font-semibold text-gray-900">{{ $question['order'] }}) {{ $question['text'] }}</h3>
                            <ul class="mb-4 text-sm font-medium text-gray-900 bg-white border rounded-lg">
                                @foreach($question['answers'] as $answer)
                                        <li class="w-full border-b border-gray-200 rounded-t-lg">
                                        <div class="flex items-center ps-4">
                                            <input @if(in_array($answer['id'], $answers)) checked @endif wire:click.debounce.500ms="answer({{ $question['parent_id'] }},{{ $question['id'] }},{{ $answer['id'] }},{{ $answer['score'] }})" id="q_{{ $answer['id'] }}" type="radio" name="q_{{ $question['id'] }}" value="{{ $answer['score'] }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2">
                                            <label for="q_{{ $answer['id'] }}" class="w-full py-3 ms-2 text-sm font-medium">{{ $answer['text'] }}</label>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @empty
                            <p>Questions have not yet been added for this section.</p>
                        @endforelse
                    </div>
                </div>
                <livewire:survey-result :score="$score" />
            </div>
        </div>
    </div>
</div>
