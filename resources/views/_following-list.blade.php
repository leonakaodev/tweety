
<div class="bg-blue-300 border border-blue-900 rounded-2xl p-4">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @forelse(current_user()->follows as $user)
            <li class="{{ $loop->last ?: 'mb-4' }}">
                <div class="text-sm">
                    <a
                        href="{{ $user->path() }}"
                        class="flex items-center"
                    >
                        <img
                            src="{{ $user->avatar }}"
                            alt="{{ $user->username }}"
                            class="rounded-full mr-2"
                            width="40"
                            height="40"
                        >

                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <li>
                No following yet
            </li>
        @endforelse
    </ul>
</div>
