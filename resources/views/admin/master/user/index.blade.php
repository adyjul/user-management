@extends('layouts.master_admin')

@section('page_title', 'User')

@section('breadcrumb')
    @php
        $breadcrumbs = ['Master', ['User', route('admin.master.user.index')]];
    @endphp
    @include('layouts.parts.breadcrumb', ['breadcrumbs' => $breadcrumbs])
@endsection

@push('styles')
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Daftar User</h3>
                </div>
                <div class="block-content pb-4">
                    <div class="table-responsive ">
                        <table id="main-datatable" class="table table-bordered table-striped table-vtop">
                            <thead>
                                <tr>
                                   <th>Nama</th>
                                   <th>Username</th>
                                   <th>Email</th>
                                   <th>No Hp</th>
                                   <th>WA</th>
                                </tr>

                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@prepend('scripts')
    <script>

    </script>
@endprepend
