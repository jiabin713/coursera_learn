<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ͬ���Ƶ�������</title>
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
	$str1 = 1234567890;								//����һ��10��������
	$str2 = 0x1234567890;	 						//����һ��16���Ƶ�����
	$str3 = 01234567890;							//����һ��8���Ƶ�����
	$str4 = 01234567;								//������һ��8���Ƶ�����
	echo '����1234567890��ͬ���Ƶ���������<p>';
	echo '10���ƵĽ���ǣ�'.$str1.'<br>';					//���10��������
	echo '16���ƵĽ���ǣ�'.$str2.'<br>';				//���16��������
	echo '8���ƵĽ���ǣ�';
if($str3 == $str4){									//�ж�$str3 ��$str4�Ĺ�ϵ
		echo '$str3 = $str4 = '.$str3;					//�����ȣ��������ֵ
	}else{
		echo '$str3 != str4';						//�������ȣ������$str3 != $str4��
	}
?>
</div>
</body>
</html>
