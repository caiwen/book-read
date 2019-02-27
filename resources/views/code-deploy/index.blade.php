@extends('layouts.conf')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>代码部署演示</h1>
            <form class="form-horizontal" role="form" id="codeDeployForm">
                <div class="form-group">
                    <label for="firstname" class="col-sm-2 control-label">git url</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="https://github.com/caiwen/book-read.git" name="url" id="url" placeholder="请输git地址">
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="col-sm-2 control-label">relativePath</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="zkCodeDeployTest" name="relativePath" id="relativePath" placeholder="请输relativePath">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">commitId</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="commitId" id="commitId" placeholder="请输入commitId">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" id="codeDeploy" class="btn btn-default">发布</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection