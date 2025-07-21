<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Advertises</h4>
                            <a href="{{ route('admin.advertise.create') }}" class="btn btn-primary">add new</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Company Name</th>
                                            <th>Contact</th>
                                            <th>Image</th>
                                            <th>Expire Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($advertises as $index => $advertise)
                                            <tr>
                                                <td>
                                                    {{ ++$index }}
                                                </td>
                                                <td>
                                                    {{ $advertise->company_name }}
                                                </td>
                                                <td>
                                                    {{ $advertise->contact }}
                                                </td>
                                                <td>
                                                    <img height="120" src="{{ asset($advertise->image) }}" alt="">
                                                </td>
                                                <td>
                                                    {{ $advertise->expire_date }}
                                                </td>
                                                <td><a href="{{ route('admin.advertise.edit', $advertise->id) }}"
                                                        class="btn btn-primary btn-sm">Edit</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
