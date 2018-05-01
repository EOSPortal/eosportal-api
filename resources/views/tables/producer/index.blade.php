@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="producers-table">
        <thead>
            <tr>
                <th>id</th>
                <th>chain_id</th>
                <th>name</th>
                <th>organization</th>
                <th>contact</th>
                <th>location</th>
                <th>p2p_url</th>
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
    $('#producers-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('producers.all') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'chain_id', name: 'chain_id' },
            { data: 'name', name: 'name' },
            { data: 'organization', name: 'organization' },
            { data: 'contact', name: 'contact' },
            { data: 'location', name: 'location' },
            { data: 'p2p_url', name: 'p2p_url' },
            { data: 'api_url', name: 'api_url' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush
