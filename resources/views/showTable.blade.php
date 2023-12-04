<!DOCTYPE html>
<html>
<head>
    <title>جدول اطلاعات</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 15px;
            text-align: left;
        }
    </style>
</head>
<body>

    <table>
    @slot('headings')
        <tr>
            <th>id</th>
            <th>name</th>
            <th>userName</th>
            <th>password</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
    @endslot

    @foreach($data as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->userName }}</td>
            <td>{{ $row->password }}</td>
            {{-- <td>{{ $row['created_at'] }}</td>
            <td>{{ $row['updated_at'] }}</td> --}}
        </tr>
    @endforeach
</table>
<ul>
    <li><a href="/">back to home</a></li>
</ul>
</body>
</html>


