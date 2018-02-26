@extends('admin.header')
@section('content')

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 用户管理</div>
                    </div>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> <a href="{{url('/admin/add')}}">新增</a></button>
                                            </div>
                                        </div>
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

            <div class="row-content am-cf">
                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-body  widget-body-lg am-fr">

                                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>用户名</th>
                                            <th>年龄</th>
                                            <th>性别</th>
                                            <th>电话</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($res as $v)
                                        <tr class="gradeX">
                                            <td>{{$v->aduser_id}}</td>
                                            <td>{{$v->aduser_name}}</td>
                                            <td>{{$v->aduser_age}}</td>
                                            <td>
                                                {{ ($v->aduser_sex)==1?'男':'女' }}
                                            </td>
                                            <td>{{$v->aduser_tel}}</td>
                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="javascript:;">
                                                        <i class="am-icon-pencil"></i> 编辑
                                                    </a>
                                                    <a href="javascript:doDel({{ $v->aduser_id }})" class="tpl-table-black-operation-del">
                                                        <i class="am-icon-trash"></i> 删除
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                        <!-- more data -->
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script>

    function doDel(id){
        layer.confirm('你确定要删除？', {
          btn: ['确定','取消'] //按钮
            },function(){
                $.post('{{url("admin/aduser/")}}/'+id,{'_token':'{{csrf_token()}}','_method':'delete'},function(data){
                    if(data==1){
                        layer.msg('删除成功');
                        window.location.reload();
                    }else{
                        layer.msg('删除失败');
                    }
                });
            }
        );
    }
</script>
        

   @endsection
