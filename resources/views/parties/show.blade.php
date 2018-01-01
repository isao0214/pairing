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
            <table border="1">
                <tr>
                    <td>No</td>
                    <td>名前</td>
                    @forelse($party->polls as $poll)
                        <td>第{{ $loop->iteration }}希望</td>
                    @empty
                    @endforelse
                </tr>
                @forelse($party->polls as $poll)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $poll->user->name }}</td>
                        @forelse($poll->users as $user)
                            <td>{{ $user->name }}</td>
                        @empty
                        @endforelse
                    </tr>
                @empty
                @endforelse
            </table>
            <td><a href="parties/{{ $party->random_id }}/edit"><button>編集</button></a></td>
            <td><a href="home"><button>戻る</button></a></td>
        </div>
    </div>
</div>
@endsection
