@extends('layout')
@section('title','文章分类添加')
@section('menu','分类添加')
@section('content')

	

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">分类名</label>
                                    <div class="am-u-sm-9">
                                        <input  type="text" name="catname">
                                        
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">请选择父分类</label>
                                    <div class="am-u-sm-9">
                                        <select name="p_name">
                                        <option value="0">作为顶级分类</option>
                                        @foreach($cats as $v)
                                        <option value="{{$v->id}}">{{$v->name}}</option>
                                        @endforeach
                                        </select>
                                        
                                    </div>
                                </div>

                              

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="button" class="am-btn am-btn-primary">保存修改</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                

@endsection