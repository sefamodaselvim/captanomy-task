<ul class="flex-column border border-gray-200 rounded-lg space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
    @foreach($sidebar as $menu)
        <li>
            <a wire:navigate href="{{ route('survey', ['survey' => $menu['id']]) }}" class="inline-flex items-center px-4 py-3 rounded-lg active w-full" aria-current="page">
                <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full">
                    <span class="font-medium text-gray-900">{{ $menu['order'] }}</span>
                </div>
                <div class="ms-2 text-gray-900">{{ $menu['text'] }}<br><span class="text-gray-500">{{ $menu['answerCount'] }}/{{ count($menu['answers']) }}</span></div>
            </a>
        </li>
    @endforeach
</ul>
