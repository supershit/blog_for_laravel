@extends('layout');
@section('title','文章修改')
@section('menu','文章修改')

@section('content')

    <script type="text/javascript" charset="utf-8" src="/admins/plugin/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/admins/plugin/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/admins/plugin/lang/zh-cn/zh-cn.js"></script>
                    
                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" action="/postedit/{{$post->id}}" method="post" enctype="multipart/form-data">

					

									<div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">请选择分类</label>
                                    <div class="am-u-sm-9">
                                        
                                        <select name="cat_id" autocomplete="off">
                                        @foreach($cats as $v)
                                        <option value="{{$v->id}}" @if($v->id == $post->cat_id) selected=selected @endif>{{$v->name}}</option>
                                        @endforeach
                                        </select>
                                        </div></div>
                                        
                                

                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">文章标题</label>
                                    <div class="am-u-sm-9">
                                        <input id="user-name" name="title" type="text" value="{{$post->title}}">
                                        
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">选择文章图片</label>
                                    <div class="am-u-sm-9">
                                        <input id="user-email" type="file" name="img">
                                       <img src="{{$post->img}}" alt="" style="height: 50px">
                                    </div>
                                </div>




                             

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">文章内容</label>
                                    <div class="am-u-sm-9">
                                        <textarea class="" name="content" rows="8" id="editor" style="height: 300px">{{$post->content}}</textarea>
                                    </div>
                                </div>
                                {{csrf_field()}}

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">确定修改</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <script>
                    		var ue = UE.getEditor('editor',{toolbars: [
    			['fullscreen', 'source', 'undo', 'redo', 'simpleupload'],
    ['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc']
		]});
                    </script>
                

@endsection