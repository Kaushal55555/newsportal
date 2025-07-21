<x-app-layout>
    <x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Company Information</h4>
                            @if (!$company)
                                <a href="{{ route('admin.company.create') }}" class="btn btn-primary">Create Company</a>
                            @endif
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
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Logo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($company)
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    {{ $company->name }}
                                                </td>
                                                <td>
                                                    {{ $company->email }}
                                                </td>
                                                <td>
                                                    {{ $company->phone }}
                                                </td>
                                                <td>
                                                    <img height="80" src="{{ asset($company->logo) }}"
                                                        alt="">
                                                </td>
                                                <td><a href="{{ route('admin.company.edit', $company->id) }}"
                                                        class="btn btn-primary btn-sm">Edit</a></td>
                                            </tr>
                                        @endif
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
</x-app-layout>
