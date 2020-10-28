<ul>
    <li>
        <a href="{{ route('home') }}" class="font-bold text-lg mb-4 block">
            Home
        </a>
    </li>
    <li>
        <a href="/explore" class="font-bold text-lg mb-4 block">
            Explore
        </a>
    </li>
    <li>
        <a href="/Notifications" class="font-bold text-lg mb-4 block">
            Notifications
        </a>
    </li>
    <li>
        <a href="/messages" class="font-bold text-lg mb-4 block">
            Messages
        </a>
    </li>
    <li>
        <a href="/bookmarks" class="font-bold text-lg mb-4 block">
            Bookmarks
        </a>
    </li>
    <li>
        <a href="/lists" class="font-bold text-lg mb-4 block">
            Lists
        </a>
    </li>
    <li>
        <a href="{{ auth()->user()->profilePath() }}" class="font-bold text-lg mb-4 block">
            Profile
        </a>
    </li>
    <li>
        <a href="/more" class="font-bold text-lg mb-4 block">
            More
        </a>
    </li>
</ul>
