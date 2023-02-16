@extends('layout.main')
@section('content')
    @if(isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif
    <table>
        <tr>
            <td>ID</td>
            <td>Tên</td>
            <td>Giá</td>
            <td>Thao tác</td>
        </tr>
        @foreach($products as $pr)
        <tr>
            <td>{{ $pr->id }}</td>
            <td>{{ $pr->ten_sp }}</td>
            <td>{{ $pr->gia }}</td>
            <td><a href="{{ route('edit-product/'.$pr->id) }}">Sửa</a></td>
        </tr>
        @endforeach
    </table>
@endsection