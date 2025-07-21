<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Article Create</h4>
                            <a href="{{ route('admin.article.index') }}" class="btn btn-primary">go back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.article.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-6 mb-4">
                                        <label for="categories">Select Categories <span
                                                class="text-danger">*</span></label>
                                        <select name="categories[]" id="categories" class="form-control select2" multiple>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('title')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label for="title">Enter Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" id="title" class="form-control"
                                            value="{{ old('title') }}">
                                        @error('title')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="content">Write Content <span class="text-danger">*</span></label>
                                        <textarea name="content" id="content" class="form-control summernote">
                                             {{ old('content') }}
                                        </textarea>
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label for="keywords">Enter Meta Keywords (for SEO)</label>
                                        <textarea name="keywords" id="keywords" class="form-control">
                                             {{ old('keywords') }}
                                        </textarea>
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label for="description">Enter Meta Description (for SEO)</label>
                                        <textarea name="description" id="description" class="form-control">
                                             {{ old('description') }}
                                        </textarea>
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="image">Enter Article Image <span
                                                class="text-danger">*</span></label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        @error('image')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Save Record</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
