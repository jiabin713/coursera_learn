<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>elseif�������</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style></head>
<body>
<div align="center">
<?php
	$moth = date("n");								//�����·ݱ���$moth
	$today = date("j");								//�������ڱ���$today
	if ($today >= 1 and $today <= 10){				//�ж����ڱ����Ƿ���1-10֮��
		echo "������".$moth."����Ѯ".$today."��";	//����ǣ�˵������Ѯ
	}elseif($today > 10 and $today <= 20){			//�����ж����ڱ����Ƿ���11-20֮��
		echo "������".$moth."����Ѯ".$today."��";	//����ǣ�˵������Ѯ
	}else{											//��������ж϶���false�������Ĭ��ֵ
		echo "������".$moth."����Ѯ".$today."��";	//˵���Ǳ��µ���Ѯ
	}
?>

</div>
</body>
</html>
