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
        
    </div>
@endsection


@prepend('scripts')
    <script>

    </script>
@endprepend
