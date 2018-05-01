@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="chains-table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>api_url</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#chains-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('chains.all') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'api_url', name: 'api_url' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush
