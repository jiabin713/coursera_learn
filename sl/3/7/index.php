<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����ת��</title>
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
<?php
$num = '3.1415926r*r';							//����һ���ַ�������
echo 'ʹ��(integer)������ת������$num���ͣ�';
echo (integer)$num;								//ʹ��intgerת������
echo '<p>';
echo '�������$num��ֵ��'.$num;					//���ԭʼ����$num
echo '<p>';
echo 'ʹ��settype����ת������$num���ͣ�';
echo settype($num,'integer');					//ʹ��settype����ת������
echo '<p>';
echo '�������$num��ֵ��'.$num;					//���ԭʼ����$num
?>
</body>
</html>