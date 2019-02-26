@extends('layouts.conf')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>当前在线客户端列表</h1>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>服务器IP</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($activeServerList))
                    @foreach($activeServerList as $key=>$item)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$item}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <div class="row justify-content-center">
            <h1>配置列表</h1><button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">点击添加配置</button>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Key</th>
                    <th>Value</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($curConfigs))
                    @foreach($curConfigs as $key=>$item)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$item}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <!-- 模态框（Modal） -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            添加新配置
                        </h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="formData">
                            <div class="form-group">
                                <label for="key">Key</label>
                                <input type="text" class="form-control" name="key" id="key" placeholder="请输入Key">
                            </div>
                            <div class="form-group">
                                <label for="value">Value</label>
                                <input type="text" class="form-control" id="value" name="value" placeholder="请输入Value">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                        </button>
                        <button type="button" class="btn btn-primary" id="ajaxbut">
                            保存配置
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal -->
    </div>
@endsection