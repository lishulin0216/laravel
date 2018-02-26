@extends('home.header')
@section('content');

<div class="sort-nav">
            <a href="javascript:;" class="sort-nav-tab user_nav_child cur" data-type="answer" data-tp="20">全部</a><span class="sort-nav-bar"></span>
            <a href="javascript:;" class="sort-nav-tab user_nav_child" data-type="answer" data-tp="21">被采纳</a><span class="sort-nav-bar"></span>
            <a href="javascript:;" class="sort-nav-tab user_nav_child" data-type="answer" data-tp="29">旧版回答</a>
        </div>

@endsection