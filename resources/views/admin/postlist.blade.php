@extends('layout');
@section('title','文章列表')
@section('menu','文章列表')

@section('content')




                <div class="portlet-title">

                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">

                        </div>
                    </div>


                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">

                            </div>
                        </div>
                        
                    <div class="am-g">
                        <div class="tpl-table-images">
                        @foreach($posts as $post)
                            <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                <div class="tpl-table-images-content">
                                    <div class="tpl-table-images-content-i-time">发布时间：{{$post->created_at}}</div>
                                    <div class="tpl-i-title">
                                        {{$post->title}}
                                    </div>
                                    <a href="javascript:;" class="tpl-table-images-content-i">
                                        <div class="tpl-table-images-content-i-info">
                             
                                        </div>
                                        <span class="tpl-table-images-content-i-shadow"></span>
                                        <img src="{{$post->img}}" alt="">
                                    </a>
                                    <div class="tpl-table-images-content-block">
                                        <div class="tpl-i-font">
                                           {{$post->content}}
                                        </div>
      
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                              
                                                <a type="button" class="am-btn am-btn-default am-btn-secondary" href="/postedit/{{$post->id}}"><span class="am-icon-edit" ></span> 编辑</a>
                                               
                                                <a type="button" class="am-btn am-btn-default am-btn-danger" href="/postdel/{{$post->id}}"><span class="am-icon-trash-o"></span> 删除</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                            <div class="am-u-lg-12">
                                <div class="am-cf">

                                    <div class="am-fr">

                                        <ul class="am-pagination tpl-pagination">
                                        <style>
										.pagination li{
												float: left;
												height: 35px;
												width: 35px;
												background-color: white;
												border: 1px solid gray;
												margin-left: 15px;
										}
										.pagination .active{
											color: white;
											background-color: blue;
											text-align: center;
										}
										.pagination .disabled{
											display: none;
										}

                                        </style>
                                        <div>{!!$posts->links()!!}</div>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            
                    


@endsection