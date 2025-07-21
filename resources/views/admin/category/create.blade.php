<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Category Create</h4>
                            <a href="{{ route('admin.category.index') }}" class="btn btn-primary">go back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.category.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-6 mb-4">
                                        <label for="title">Enter Category Title <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="title" id="title" class="form-control"
                                            value="{{ old('title') }}">
                                        @error('title')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="slug">Enter Category Slug <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="slug" id="slug" class="form-control"
                                            value="{{ old('slug') }}">
                                         @error('slug')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
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
