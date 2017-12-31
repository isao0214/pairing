@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="/parties/create"><button>パーティを新規作成</button></a>
            <p>あなたが作成したパーティ</p>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>タイトル</th>
                    <th>詳細</th>
                    <th>ステータス</th>
                    <th>開始日時</th>
                    <th></th>
                    <th></th>
                </tr>
                    @forelse ($parties as $party)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $party->id }}</td>
                            <td>{{ $party->title }}</td>
                            <td>{{ $party->description }}</td>
                            <td>{{ $party->displayStatus() }}</td>
                            <td>{{ $party->displayStartAt() }}</td>
                            <td><a href="parties/{{ $party->random_id }}"><button>詳細</button></a></td>
                            <td><a href="parties/{{ $party->random_id }}/edit"><button>編集</button></a></td>
                        </tr>
                    @empty
                    @endforelse
            </table>
        </div>
    </div>
</div>
@endsection
