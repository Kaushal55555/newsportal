 @props(['article'])
 <a href="{{ route('article', $article->id) }}"
     class="grid grid-cols-3 gap-4 shadow hover:shadow-lg rounded-md overflow-hidden">
     <img class="h-full w-full object-cover" src="{{ asset($article->image) }}" alt="{{ $article->title }}">
     <div class="col-span-2 p-2">
         <h3 class="line-clamp-2 font-bold">
             {{ $article->title }}
         </h3>
         <small>
             {{ Anuzpandey\LaravelNepaliDate\LaravelNepaliDate::from($article->created_at)->toNepaliDate(format: 'D, j F Y', locale: 'np') }}
         </small>
     </div>
 </a>
