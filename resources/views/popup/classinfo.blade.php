<style type="text/css">
    .academic-detail {
        white-space: normal;

    }
    .action {
        text-align: center;
        vertical-align: middle;
    }
</style>
<table class="table table-hover table-striped table-condensed" id="table-class-info">
    <thead>
        <tr>
            <th>Program</th>
            <th>Level</th>
            <th>Shift</th>
            <th>Time</th>
            <th>Academic detail</th>
            <th>
                Action
            </th>
        </tr>
    </thead>
    @foreach($classes as $item)
        <tr>
            <td>{{ $item->nameprogram }}</td>
            <td>{{ $item->namelevel }}</td>
            <td>{{ $item->nameshift }}</td>
            <td>{{ $item->nametime }}</td>
            <td class="academic-detail">
                <a href="#" data-id="{{$item->id}}" id="edit-class">
                    Program: {{ $item->nameprogram }} / Level: {{ $item->namelevel }} / Shift: {{ $item->nameshift }} / Time: {{ $item->nametime }} / Batch: {{ $item->namebatch }} / Group: {{ $item->namegroup }} / Start date: {{ $item->start_date }} / End date: {{ $item->end_date }}
                </a>
            </td>
            <td class="action">
                <button class="btn btn-danger btn-sm del-class" value="{{ $item->id }}">Delete</button>
            </td>
        </tr>
    @endforeach
</table>
