<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Company Edit</h4>
                            <a href="{{ route('admin.company.index') }}" class="btn btn-primary">go back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.company.update', $company->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method("patch")
                                <div class="row">
                                    <div class="col-6 mb-4">
                                        <label for="name">Enter Company Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="{{ $company->name }}">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="email">Enter Company Email <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="email" id="email" class="form-control"
                                            value="{{ $company->email }}">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="phone">Enter Company Phone <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            value="{{ $company->phone }}">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="facebook">Enter Company Faccebook URL</label>
                                        <input type="text" name="facebook" id="facebook" class="form-control"
                                            value="{{ $company->facebook_url }}">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="youtube">Enter Company Youtube URl</label>
                                        <input type="text" name="youtube" id="youtube" class="form-control"
                                            value="{{ $company->facebook_url }}">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="instagram">Enter Company Instagram URL</label>
                                        <input type="text" name="instagram" id="instagram" class="form-control"
                                            value="{{ $company->instagram_url }}">
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label for="keywords">Enter Meta Keywords (for SEO)</label>
                                        <textarea name="keywords" id="keywords" class="form-control"> {{ $company->meta_keywords }}</textarea>
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label for="description">Enter Meta Description (for SEO)</label>
                                        <textarea name="description" id="description" class="form-control"> {{ $company->meta_description }}</textarea>
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="logo">Upload Company Logo <span
                                                class="text-danger">*</span></label>
                                        <input type="file" name="logo" id="logo" class="form-control">
                                        <img src="{{ asset($company->logo) }}" height="200" alt="">
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
