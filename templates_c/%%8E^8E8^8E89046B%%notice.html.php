<?php /* Smarty version 2.6.30, created on 2017-04-19 08:37:52
         compiled from notice.html */ ?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>表单</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" href="../css/acnotice.css"/>
<link rel="stylesheet" href="../plugins/layui/css/layui.css" media="all" />
<link rel="stylesheet"
	href="../plugins/font-awesome/css/font-awesome.min.css">
</head>

<body>
	<div style="margin: 15px;">
		<fieldset class="layui-elem-field layui-field-title"
			style="margin-top: 20px;">
			<legend>通知公告发布</legend>
		</fieldset>

		<form class="layui-form" action="../Controller/Admin_setnotice.php" style="width: 60%;" method="post">
			<div class="layui-form-item">
				<label class="layui-form-label">标题</label>
				<div class="layui-input-block">
					<input type="text" name="notiname" lay-verify="title"
						autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item layui-form-text">
				<label class="layui-form-label">内容</label>
				<div class="layui-input-block">
					<textarea class="layui-textarea layui-hide" name="content"
						lay-verify="content" id="LAY_demo_editor"></textarea>
				</div>
			</div>
			<div class="layui-form-item">
				<div class="layui-input-block">
					<button type="submit" class="layui-btn" lay-submit="" lay-filter="">立即发布</button>
				</div>
			</div>
		</form>
		<div id="list">
			<legend>公告列表</legend>
			<table class="site-table table-hover">
				<tbody>
				<?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['new']):
?>
					<tr>
						<td><?php echo $this->_tpl_vars['new']['bt']; ?>
</td>
						<td>
							<a class="delnew" href="?nid=<?php echo $this->_tpl_vars['new']['nid']; ?>
"><i class="fa fa-trash" aria-hidden="true" lay-submit=""></i></a>
						</td>
					</tr>
					<?php endforeach; endif; unset($_from); ?>	
				</tbody>
			</table>
		</div>
	</div>
	<script type="text/javascript" src="../plugins/layui/layui.js"></script>
	<script>
			layui.use(['form', 'layedit', 'laydate'], function() {
				var form = layui.form(),
					layer = layui.layer,
					layedit = layui.layedit,
					laydate = layui.laydate;

				//创建一个编辑器
				//插入图片需配置
//				layedit.set({
//					  uploadImage: {
//					    url: '' //接口url
//					    ,type: '' //默认post
//					  }
//					});
				var editIndex = layedit.build('LAY_demo_editor');
//				//需要在图片上传成功后对LayEdit返回如下格式的JSON信息：
//				{
//				  "code": 0 //0表示成功，其它失败
//				  ,"msg": "" //提示信息 //一般上传失败后返回
//				  ,"data": {
//				    "src": "图片路径"
//				    ,"title": "图片名称" //可选
//				  }
//				}
				//自定义验证规则
				form.verify({
					title: function(value) {
						if(value.length < 4) {
							return '标题至少得4个字符啊';
						}
					},
					pass: [/(.+){6,12}$/, '密码必须6到12位'],
					content: function(value) {
						layedit.sync(editIndex);
					}
				});

				//监听提交

			});
		</script>
</body>

</html>