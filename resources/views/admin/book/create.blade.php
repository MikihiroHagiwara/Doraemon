@extends('layouts.admin')

@section('tltle', '投稿の新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>投稿新規作成</h2>
                <p>インラインのコードの表示部分を<code>&lt;code&gt;</code>タグで囲みます。</p>
                ディレクトリを切り替えるには、<kbd>cd</kbd>と続けてディレクトリ名を入力します。設定を編集するには、<kbd>ctrl</kbd> + <kbd>,</kbd>を押します。
                <samp>This text is meant to be treated as sample output from a computer program.</samp>
                <h3 class="mb-4">レスポンシブ画像(img-fluid)</h3>
                <img src="https://prog-8.com/images/html/advanced/top.png" class="img-fluid" alt="レスポンシブ画像">
            </div>
        </div>
    </div>
@endsection