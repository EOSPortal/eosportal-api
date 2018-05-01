@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="info-table">
        <thead>
            <tr>
                <th>id</th>
                <th>chain_id</th>
                <th>producer_id</th>
                <th>head_producer_id</th>
                <th>server_version</th>
                <th>head_block_num</th>
                <th>last_irreversible_block_num</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#info-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('infos.all') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'chain_id', name: 'chain_id' },
            { data: 'producer_id', name: 'producer_id' },
            { data: 'head_producer_id', name: 'head_producer_id' },
            { data: 'server_version', name: 'server_version' },
            { data: 'head_block_num', name: 'head_block_num' },
            { data: 'last_irreversible_block_num', name: 'last_irreversible_block_num' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush
