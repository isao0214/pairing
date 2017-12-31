@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['url' => "/parties", 'method' => 'post', 'name' => 'parties_store']) !!}
                <input type="text" name="party[title]" placeholder='タイトルを入力してください' required>
                <br>
                <textarea name="party[description]" placeholder='詳細を入力してください' required></textarea>
                <br>
                <select name="party[status]" required>
                    {{-- ToDo: 定数から取得するようにする --}}
                    <option value="0">削除</option>
                    <option value="1" selected>公開</option>
                    <option value="2">下書き</option>
                </select>
                <br>
                <input type="datetime-local" name="party[start_at]">
                <br>
                <p>学生</p>
                @foreach(range(1, 3) as $i)
                    <select name="userIds[]" required>
                        @foreach($studentUsers as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                @endforeach
                <br>
                <p>企業</p>
                @foreach(range(1, 3) as $i)
                    <select name="userIds[]" required>
                        @foreach($employeeUsers as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                @endforeach
                <br>
                <a href="javascript:parties_store.submit()">送信</a>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
