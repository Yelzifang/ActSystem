<?php /* Smarty version 2.6.30, created on 2017-02-12 05:45:23
         compiled from declare.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>社会实践管理系统</title>
		<link rel="stylesheet" type="text/css" href="../css/datedropper.css"/>
		<link rel="stylesheet" type="text/css" href="../css/timedropper.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="../css/declare.css"/>
	</head>
	<body>
		<div id="all">			
			<div class="menuHolder">
				<div class="menuWindow">
					<ul class="p1">
						<li class="s1"><a href="#url"><div>活动申报</div></a>
							<ul class="p2">
								<li class="s2"><a href="Targetcontroller.php?declare_title=1" target="change"><span>登记</span></a></li>
								<li class="s2"><a href="Targetcontroller.php?declare_title" target="change"><span>修改</span></a></li>
								<li class="s2"><a href="Targetcontroller.php?declare_title=3"><span>审批</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
		<iframe src="Targetcontroller.php?declare_title=1" width="100%" height="100%" frameborder="0" name="change"></iframe>
		</div>
		<script src="../js/jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/timedropper.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/datedropper.min.js" type="text/javascript" charset="utf-8"></script>
		<script>
		$("#pickdate").dateDropper({
			animate: false,
			format: 'Y-m-d',
			maxYear: '2020'
		});
		$("#picktime").timeDropper({
			meridians: false,
			format: 'HH:mm',
		});
		$("#pickdate2").dateDropper({
			animate: false,
			format: 'Y-m-d',
			maxYear: '2020'
		});
		$("#picktime2").timeDropper({
			meridians: false,
			format: 'HH:mm',
		});
		</script>
	</body>
</html>