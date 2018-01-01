@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>{{ $party->id }}</td>
                </tr>
                <tr>
                    <td>タイトル</td>
                    <td>{{ $party->title }}</td>
                </tr>
                <tr>
                    <td>詳細</td>
                    <td>{{ $party->description }}</td>
                </tr>
                <tr>
                    <td>ステータス</td>
                    <td>{{ $party->displayStatus() }}</td>
                </tr>
                <tr>
                    <td>開始日時</td>
                    <td>{{ $party->displayStartAt() }}</td>
                </tr>
            </table>
            <br>
            <td><a href="parties/{{ $party->random_id }}/edit"><button>編集</button></a></td>
            <td><a href="home"><button>戻る</button></a></td>
        </div>
    </div>
</div>
@endsection
