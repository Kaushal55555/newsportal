<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Company Create</h4>
                            <a href="{{route('admin.company.index')}}" class="btn btn-primary">go back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.company.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-6 mb-4">
                                        <label for="name">Enter Company Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>

                                     <div class="col-6 mb-4">
                                        <label for="email">Enter Company Email <span class="text-danger">*</span></label>
                                        <input type="text" name="email" id="email" class="form-control">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="phone">Enter Company Phone <span class="text-danger">*</span></label>
                                        <input type="text" name="phone" id="phone" class="form-control">
                                    </div>

                                     <div class="col-6 mb-4">
                                        <label for="facebook">Enter Company Faccebook URL</label>
                                        <input type="text" name="facebook" id="facebook" class="form-control">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="youtube">Enter Company Youtube URl</label>
                                        <input type="text" name="youtube" id="youtube" class="form-control">
                                    </div>

                                     <div class="col-6 mb-4">
                                        <label for="instagram">Enter Company Instagram URL</label>
                                        <input type="text" name="instagram" id="instagram" class="form-control">
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label for="keywords">Enter Meta Keywords (for SEO)</label>
                                        <textarea name="keywords" id="keywords" class="form-control"></textarea>
                                    </div>

                                     <div class="col-12 mb-4">
                                        <label for="description">Enter Meta Description (for SEO)</label>
                                        <textarea name="description" id="description" class="form-control"></textarea>
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="logo">Upload Company Logo <span class="text-danger">*</span></label>
                                        <input type="file" name="logo" id="logo" class="form-control">
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
