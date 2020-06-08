@extends('layouts.front')

@section('content')
    <div class="py-4">
        <div class="container">
            <div id="main_visual" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#main_visual" data-slide-to="0" class="active"></li>
                    <li data-target="#main_visual" data-slide-to="1"></li>
                    <li data-target="#main_visual" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://eiga.k-img.com/images/movie/79515/photo/23ec247af7d1d38e/640.jpg" alt="スタンドバイミー写真">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>ドラえもん本を読もう</h2>
                            <p>ドラえもんに関する本を特集したサイトです（※非公式）</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.cinemacafe.net/imgs/std_l1/120035.jpg" alt="読書感想文">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>レビュー閲覧・投稿</h2>
                            <p>本のレビューを閲覧することができ、会員登録・ログインをすることで作品に関するレビューが投稿できます（無料）</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://animeanime.jp/imgs/p/jtKDOVlKAvjRrNw8SXAVejagI61Nrq_oqaqr/43266.jpg">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>ドラえもんファンになろう</h2>
                            <p>その他、ドラえもんに関する本のニュースを配信中！</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main_visual" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">前に戻る</span>
                </a>
                <a class="carousel-control-next" href="#main_visual" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">次に進む</span>
                </a>
            </div>
        </div>
    </div>
    

