<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ͨ�������Գ������ж��塢��ȡ���ж�</title>
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
define ("MESSAGE","�ܿ���һ��");
echo MESSAGE."<BR>";					//�������MESSAGE
echo Message."<BR>";					//���"Message"����ʾû�иó���
define ("COUNT","�ܿ������",true);
echo COUNT."<BR>";						//�������COUNT
echo Count."<BR>";						//�������COUNT����Ϊ�趨��Сд������
$name = "count";
echo constant ($name)."<BR>";    			//�������COUNT
echo (defined ("MESSAGE"))."<BR>";     	//������巵��True��ʹ��echo�����ʾ1

?>
</body>
</html>
