@extends('admin.header')
@section('content')

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">文章列表</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}">
							              <option value="option1">所有类别</option>
							              <option value="option2">IT业界</option>
							              <option value="option3">数码产品</option>
							              <option value="option3">笔记本电脑</option>
							              <option value="option3">平板电脑</option>
							              <option value="option3">只能手机</option>
							              <option value="option3">超极本</option>
							            </select>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field ">
                                        <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
          </span>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">
                                   <table class="am-table am-table-striped  table-main ">
                                    <thead>
                                        <tr>
                                            <th class="table-id">ID</th>
                                            <th class="table-title">用户名</th>
                                            <th class="table-type">性别</th>
                                            <th class="table-date am-hide-sm-only">状态</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $v)
                                        <tr>
                                            <td>{{$v->id}}</td>
                                            <td>{{$v->name}}</td>
                                            <td>{{$v->sex}}</td>
                                            <td>1</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 修改</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 禁言</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
   
   @endsection