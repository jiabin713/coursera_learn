<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�Լ��������û�����Ĳ�ѯ�ؼ��ֽ��мӴ����</title>
</head>

<body>
<?php
$text="����Ů�ӹ�Ԣ����ܰ������200�ף���ͨ���������黯ר�˹�����������ѡ��";
$content=$_POST[content];
echo str_ireplace($content,"<font color='red'><strong>".$content."</strong></font>",$text);       	//�Լ��������û�����Ĳ�ѯ�ؼ��ֽ��мӴ����
?>
</body>
</html>
