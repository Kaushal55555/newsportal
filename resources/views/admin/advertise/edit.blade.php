<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Category Edit</h4>
                            <a href="{{ route('admin.category.index') }}" class="btn btn-primary">go back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.category.update', $category->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-6 mb-4">
                                        <label for="title">Enter Category Title <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="title" id="title" class="form-control"
                                            value="{{ old('title') ?? $category->title }}">
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
                                            value="{{ old('slug') ?? $category->slug }}">
                                        @error('slug')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label for="keywords">Enter Meta Keywords (for SEO)</label>
                                        <textarea name="keywords" id="keywords" class="form-control">
                                             {{ old('keywords') ?? $category->meta_keywords }}
                                        </textarea>
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label for="description">Enter Meta Description (for SEO)</label>
                                        <textarea name="description" id="description" class="form-control">
                                             {{ old('description') ?? $category->meta_description }}
                                        </textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Update Record</button>
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
