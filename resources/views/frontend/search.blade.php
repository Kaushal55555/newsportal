<x-frontend-layout>
    <section>
        <div class="container grid grid-cols-3 py-10 gap-8">
            <div class="col-span-2 space-y-6">
                <h1>
                    Search result for "{{ $q }}"
                </h1>
                @foreach ($articles as $article)
                    <x-article-card :article="$article" />
                @endforeach
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
