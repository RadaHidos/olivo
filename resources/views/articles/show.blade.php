<x-site-layout title="{{$article->title}}">

    <div class="font-bold mb-2 text-teal-500">Written by {{$article->author->name}}</div>

    {{$article->content}}



    <h2 class="font-bold mb-2 mt-8">Comments</h2>

    @if($article->comments->isNotEmpty())

    <ul class="list-disc pl-4">
        @foreach($article->comments as $comment)
        <li>{{$comment->content}}</li>
        @endforeach
    </ul>

    @else
    <div class="text-gray-500"> No comments yet</div>

    @endif

</x-site-layout>