<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��addcslashes()������stripcslashes()�����ֱ��ָ����Χ���ַ�������ת�塢��ԭ</title>
</head>
<body>
<?php
$a="���������";         				   		//��ָ����Χ�ڵ��ַ�����ת��
echo $a;										//���ָ�����ַ���
echo "<br>";							 		//ִ�л���
$b=addcslashes($a,"���������");			    //ת��ָ�����ַ���
echo $b;										//���ת�����ַ���
echo "<br>";							 		//ִ�л���
$c=stripcslashes($b);        		   			//��ת����ַ������л�ԭ
echo $c;									    //�����ԭ���ת���ַ���
?>
</body>
</html>
