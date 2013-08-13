<?php
if(isset($_GET['id']))
	$id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>不息之壤—息国_<?php 
	switch ($id) {
		case '1':
			echo "息国风采";
			$description="息国风采,息县历史,息县地理位置,息县名胜古迹,有钱难买息县坡,息县工业,最美息县,息国故里";
			break;
		case '2':
			echo "历史文化";
			$description="息县历史文化,息县历史悠久,息夫人,桃花夫人,天下第一县,最早建立县制,";
			break;
		case '3':
			echo "人文壮景";
			$description="息县人文壮景,蒲公山,州衙谯楼,息州州衙谯楼,秦楼遗址,谯楼,濮山,濮公山庙会,三月三";
			break;
		case '4':
			echo "本地特产";
			$description="息县特产,息半夏,息县香稻丸,息县小香瓜,息县红麻,息县松花蛋,关店葡萄,路口彭店西瓜,蟠桃,生猪,獭兔,息县弱筋小麦,息县油酥火烧";
			break;
		case '5':
			echo "那些传说";
			$description="息县传说,息壤,鲧,天帝,火神祝融,禹,水神共工,庙会,三月三,濮山,濮公道人,濮公山上一座庙，小庙虽小比山高，一捧神泉去百病，濮公千年惠今朝";
			break;
		default:
			echo "不息之壤";
			$description="息国风采,息县历史,息县地理位置,息县名胜古迹,有钱难买息县坡,息县工业,最美息县,息国故里";
			break;
	}
	?>
</title>
<meta name="keywords" content="息,息县,不息之壤,息国风采,历史文化,本地特产,那些传说">
<meta name="description" content="<?php echo $description?>">
<link rel="stylesheet" type="text/css" media="screen, projection" href="css/screen.css" />
<link rel="shortcut icon" href="img/Project1.ico" />
</head>

<body>
	<?php
	include "header.php";
	?>
	<div id="wrap" class="group">
	<?php
	if(isset($_GET['id']) && is_numeric($id) && $id<6 && $id>0)
		include $id . ".php";
	else
		include "1.php";
	?>
	<?php
	include "secondary.php";
	include "footer.php";
	?>
	</div>
</body>
</html>