@props(['post' => $post])

<div class="mb-4">
    <a href="{{ route('users.posts', $post->user) }}" class="font-bold mr-3">{{ $post->user->username }}</a><span
        class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>

    <p class="mb-2">{{ $post->body }}</p>
</div>
@auth
@can('delete', $post)
    <div>
        <form action="{{ route('posts.destroy', $post) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-blue-500">Delete</button>
        </form>
    </div>
@endcan
@endauth

<div class="flex items-center">
    @auth
        @if(!$post->likedBy(Auth::user()))

            <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                @csrf
                <button type="submit" class="text-blue-500">Like</button>
            </form>
        @else
            <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-blue-500">Unlike</button>
            </form>
        @endif
        
    @endauth
    </div>

    <span> {{ $post ->likes->count() }}  {{ Str::plural('like', $post ->likes->count()) }}</span>