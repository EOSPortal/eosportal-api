@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="blocks-table">
        <thead>
            <tr>
                <th>id</th>
                <th>producer_id</th>
                <th>height</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#blocks-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('blocks.all') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'producer_id', name: 'producer_id' },
            { data: 'height', name: 'height' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush
