<?php /* Smarty version 2.6.30, created on 2017-03-01 03:10:46
         compiled from squery.html */ ?>
<!DOCTYPE html>
<html>
	<head>
			<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">   
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>学生查询</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="../css/global.css" media="all">
		<link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/table.css" />
	</head>
	<?php echo $this->_tpl_vars['stuMsg']; ?>

	<body ng-app="myApp" ng-controller="myCtrl">
		<div class="admin-main" >
			<!--条件搜索栏-->
			<fieldset class="layui-elem-field-title">
				<legend>查询条件</legend>
				<form class="layui-form" action="" method="post">
					<div class="layui-form-item">
						<div class="layui-inline">						
							<label class="layui-form-label">年级</label>
							<div class="layui-input-block" style="width: 190px;margin-left: 90px;">
								<select name="grade" lay-filter="aihao">
									<option value="2013">2013</option>
									<option value="2014" selected="">2014</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
								</select>
							</div>
						</div>
						<div class="layui-inline">
							<label class="layui-form-label">班级</label>
							<div class="layui-input-inline">
								<input type="text" name="class" placeholder="请填写班号" autocomplete="off" class="layui-input">
							</div>
						</div>
					</div>
				
					<div class="layui-form-item">
						<label class="layui-form-label">姓名</label>
						<div class="layui-input-inline">
							<input type="text" name="stuname" autocomplete="off" class="layui-input">
						</div>
						<label class="layui-form-label">学号</label>
						<div class="layui-input-inline">
							<input type="text" name="username" autocomplete="off" class="layui-input">
						</div>
						<div class="layui-input-inline" style="width: 100px;">
							<button class="layui-btn" lay-submit=""><i class="fa fa-search" aria-hidden="true"></i> 查询</button>
						</div>
						<div class="layui-input-inline">
							<button class="layui-btn" lay-submit="">导出表格</button>
						</div>
					</div>
				</form>
			</fieldset>
			<!--查询结果区域-->
			<fieldset class="layui-elem-field">
				<legend>查询结果</legend>
				<button ng-click="col='username';desc=!desc" type="button" class="btntime">按年级</button>
				<div class="layui-field-box">
					<table class="site-table table-hover">
						<thead>
							<tr>
								<th style="width: 15%;"><input type="checkbox" id="selected-all" ng-model="ischeckAll" ng-click="selectAll(datas)"> 全选</th>
								<th style="width: 20%;">学号</th>
								<th style="width: 15%;">姓名</th>
								<th style="width: 20%;">班级</th>
								<th style="width: 20%;">长号</th>
								<th style="width: 10%;">查看详情</th>
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="x in stus | orderBy:col:desc">
								<td><input type="checkbox" ng-model="x.ck"></td>
								<td>{{x.snum}}</td>
								<td>{{x.sname}}</td>
								<td>{{x.sbh}}</td>
								<td>{{x.sdh}}</td>
								<td>
									<i onclick="getmsg(1)" class="fa fa-angle-double-right" aria-hidden="true" data-toggle="modal" data-target="#sdblock"  ></i>
								</td>
							</tr>					
							
						</tbody>
					</table>
				</div>
			</fieldset>
			<div class="admin-table-page">
				<div id="page" class="page">
				</div>
			</div>
		</div>
		
		<!--弹出框-->
	<div class="modal fade" id="sdblock" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog sdblock" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">详细信息</h4>
				</div>
				<div class="modal-body blockleft" id="modal-body blockleft">
					<div class="line">
						<label for="username">学号：<p id="username">201324133234</p></label>
						<label for="nation">民族：<p id="nation">汉族</p></label>
						<label for="idnum">身份证：<p id="idnum">445366198305234452</p></label>
						<label for="source">生源地：<p id="source">广东汕头</p></label>
						<label for="mail">邮箱：<p id="mail">345298342@qq.com</p><p class="vital"></p></label>
						<label for="grade">年级：<p id="grade">2013</p></label>
						<label for="subject">专业：<p id="subject">通信工程</p></label>
						<label for="scsys">学制：<p id="scsys">4</p></label>
					</div>
					<div class="line">
						<label for="stuname">姓名：<p  id="stuname">张三四</p><p class="vital"></p></label>
						<label for="sex">性别：<p id="sex">男</p></label>
						<label for="polistatus">政治面貌：<p  id="polistatus"> 团员</p></label>
						<label for="longtell">长号：<p  id="longtell">18898832453</p><p class="vital"></p></label>
						<label for="shorttell">短号：<p  id="shorttell">669234</p></label>
						<label for="institute">学院：<p id="institute">电子信息与通信工程学院</p></label>
						<label for="class">班号：<p id="class">2013241332</p></label>
						<label for="level">层次：<p id="level">本科</p></label>
					</div>
				</div>
			</div>
		</div>
	</div>

		
		
		<script src="../tjs/angular.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/jquery-1.12.3.min.js"  type="text/javascript"></script>
		<script src="../tjs/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="../plugins/layui/layui.js"></script>
		<script type="text/javascript">
			var app = angular.module("myApp", []);
			app.controller("myCtrl", function($scope) {
			<?php echo '$scope.stus = '; ?>
<?php echo $this->_tpl_vars['stuMsg']; ?>
<?php echo ';'; ?>

			  $scope.ischeckAll = false;
				$scope.selectAll = function(stus) {
					if($scope.ischeckAll) {
						for(var i = 0; i < $scope.stus.length; i++) {
							$scope.stus[i].ck = true;
						}
					} else {
						for(var i = 0; i < $scope.stus.length; i++) {
							$scope.stus[i].ck = false;
						}
					}
				};
			});
			
			layui.use(['form', 'laydate'], function() {
				var form = layui.form(),
					laydate = layui.laydate;
			});

		</script>
		<script type="text/javascript">
		function getmsg(sid){
			alert(sid);
		}
		</script>
	</body>

</html>