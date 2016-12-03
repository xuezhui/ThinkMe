<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"/home/www/thinkadmin/application/install/view/index/step2.html";i:1480757594;s:64:"/home/www/thinkadmin/application/install/view/public/header.html";i:1480757118;s:64:"/home/www/thinkadmin/application/install/view/public/footer.html";i:1480589092;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ThinkAdmin--系统安装</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="_STATIC_/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="_STATIC_/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="_STATIC_/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="_STATIC_/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="_STATIC_/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="_STATIC_/js/html5shiv.min.js"></script>
    <script src="_STATIC_/js/respond.min.js"></script>
    <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav layout-boxed">
<div class="content-wrapper">
    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="_STATIC_/index2.html" class="navbar-brand"><b>ThinkAdmin</b></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
<div class="container">
<!-- general form elements -->
    <section class="content">
    <!-- /.box-header -->
    <!-- form start -->
        <form class="form-horizontal">

            <div class="box box-default ">
                <div class="box-header with-border">
                    <h3 class="box-title">填写数据库信息</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">服务器</label>
                    <div class="col-sm-10">
                        <input class="form-control col-xs-4" name="db[DB_HOST]" type="text" placeholder="localhost" value="localhost">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">数据库名</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="db[DB_USER]" value="thinkadmin" placeholder="thinkadmin">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">数据库用户名</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="db[DB_USER]" value="root" placeholder="root">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">数据库密码</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="db[DB_PWD]" value="" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">数据库端口</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="text" name="db[DB_PORT]" value="3306">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">数据表前缀</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="db[DB_PREFIX]" value="think">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">管理员账号：</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="text" name="admin[name]" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">管理员密码：</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="text" name="admin[pass]" value="">
                    </div>
                </div>
                <div class="box-footer">
                <a type="button" href="<?php echo url('index'); ?>" class="btn btn-default">上一步</a>
                <a type="button" target-form="form-setup" class="btn btn-primary pull-right">下一步</a>
                </div>

            </div>
            <!-- /.box-body -->
        </form>
</section>
<!-- /.box -->
</div>
<footer class="main-footer">
    <div class="container">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.1
        </div>
        <strong>Copyright &copy; 2016-2026 <a href="http://www.la998.com">la998</a>.</strong> All rights
        reserved.
    </div>
    <!-- /.container -->
</footer>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="_STATIC_/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="_STATIC_/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="_STATIC_/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="_STATIC_/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="_STATIC_/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="_STATIC_/js/demo.js"></script>
</body>
</html>