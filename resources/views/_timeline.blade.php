<div class="timeline">
    <div class="border border-gray-300 rounded-2xl">
        @forelse($tweets as $tweet)
            @include('_tweet')
        @empty
            <p class="p-4">No tweets yet.</p>
        @endforelse

    </div>

    <div class="mt-4">
        {{ $tweets->links() }}
    </div>
</div>
