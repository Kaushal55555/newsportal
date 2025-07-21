<x-frontend-layout :title="$article->title" :description="$article->meta_description" :keywords="$article->meta_keywords" :image="$article->image">
    <section>
        <div class="container grid grid-cols-3 py-10 gap-8">
            <div class="col-span-2 space-y-6">
                <div>
                    {{ $article->views }}
                </div>
                <h1 class="text-4xl font-semibold">{{ $article->title }}</h1>
                <img class="w-full" src="{{ asset($article->image) }}" alt="{{ $article->title }}">

                <div>
                    {!! $article->content !!}
                </div>

                <div class="sharethis-inline-share-buttons"></div>

                <div>
                    <div class="fb-comments" data-href="http://127.0.0.1:8000/article/{{ $article->id }}" data-width=""
                        data-numposts="5">
                    </div>
                </div>
            </div>

            {{-- Advertise --}}
            <div>
                @foreach ($advertises as $ad)
                    <a href="{{ $ad->redirect_url }}" target="_blank">
                        <img src="{{ asset($ad->image) }}" alt="">
                    </a>
                @endforeach

                <!-- <div class="fb-page mt-10" data-href="https://www.facebook.com/sudam.shrestha.98" data-tabs="timeline"
                    data-width="" data-height="" data-small-header="true" data-adapt-container-width="true"
                    data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/sudam.shrestha.98" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/sudam.shrestha.98">Sudam Shrestha</a></blockquote>
                </div> -->
            </div>
        </div>
    </section>
</x-frontend-layout>
