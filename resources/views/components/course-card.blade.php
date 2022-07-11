<div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
    <a href="{{ route('course', $course->slug) }}">
        <img src="{{ $course->image }}" class="rounded-md mb-2" />
        <h2 class="text-gray-600 truncate uppercase">
            {{ $course->title }}

        </h2>
        <h4 class="text-gray-400">
            {{ $course->excerpt }}
        </h4>

        <img src="{{ $course->user->avatar }}" alt="avatar" class="rounded-full mx-auto h-16 w-16 mt-4">

    </a>
</div>