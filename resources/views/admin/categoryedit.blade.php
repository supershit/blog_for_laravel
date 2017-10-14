@extends('layout');
@section('title','文章分类修改')
@section('menu','分类修改')

@section('content')


                    <div class="am-g tpl-amazeui-form">

						<form action="/categoryedit/{{$cat->id}}" method="post">
                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">分类名</label>
                                    <div class="am-u-sm-9">
                                        <input  type="text" name="name" value="{{$cat->name}}">
                                        
                                    </div>
                                </div>
									<br>
                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">请选择父分类</label>
                                    <div class="am-u-sm-9">
                                        <select name="p_id" autocomplete="off">
                                        <option value="0">作为顶级分类</option>
                                        @foreach($cats as $v)
                                        <option value="{{$v->id}}" @if($v->id == $cat->pid) selected = 'selected' @endif>{{$v->name}}</option>
                                        @endforeach
                                        </select>
                                        
                                    </div>
                                </div>

                              

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                    		{{csrf_field()}}
                                        <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </form>
                    </div>

@endsection