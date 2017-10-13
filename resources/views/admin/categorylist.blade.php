@extends('layout');
@section('title','文章分类管理')
@section('menu','分类列表')

@section('content')

                <div class="portlet-title">

                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                
                                 </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block">
                    <div class="am-g" style="height: 1px;">
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">

                            </div>
                        </div>

                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                
                                <span class="am-input-group-btn">
            
          </span>
                            </div>
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check"><input class="tpl-table-fz-check" type="checkbox"></th>
                                            <th class="table-id">ID</th>
                                            <th class="table-title">分类名</th>
                                            <th class="table-type">父类</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($cats as $v)
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>{{$v->id}}</td>
                                            <td><a href="#">{{$v->name}}</a></td>
                                            <td>{{$v->pid}}</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                     @endforeach

                                    </tbody>
                                </table>
                                <div class="am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            
@endsection