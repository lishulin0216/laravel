@extends('home.header')
@section('content');

<div class="uc-top-bar">
    <div class="sort-nav">
        <a href="javascript:;" class="sort-nav-tab user_nav_child cur" data-type="question" data-tp="10">全部</a><span class="sort-nav-bar"></span>
        <a href="javascript:;" class="sort-nav-tab user_nav_child" data-type="question" data-tp="11">待解答</a><span class="sort-nav-bar"></span>
        <a href="javascript:;" class="sort-nav-tab user_nav_child" data-type="question" data-tp="12">未采纳</a><span class="sort-nav-bar"></span>
        <a href="javascript:;" class="sort-nav-tab user_nav_child" data-type="question" data-tp="13">已采纳</a><span class="sort-nav-bar"></span>
        <a href="javascript:;" class="sort-nav-tab user_nav_child" data-type="question" data-tp="19">旧版提问</a>
    </div>
</div>


@endsection