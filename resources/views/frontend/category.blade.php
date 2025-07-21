<x-frontend-layout :title="$category->title" :description="$category->meta_description" :keywords="$category->meta_keywords">
    <section>
        <div class="container grid grid-cols-3 py-10 gap-8">
            <div class="col-span-2 space-y-6">
                @foreach ($articles as $article)
                    <x-article-card :article="$article" />
                @endforeach
                {{ $articles->links() }}
            </div>

            {{-- Advertise --}}
            <div>
                @foreach ($advertises as $ad)
                    <a href="{{ $ad->redirect_url }}" target="_blank">
                        <img src="{{ asset($ad->image) }}" alt="">
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</x-frontend-layout>
