<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��substr()������ȡ�����ı��Ĳ����ַ�����ʣ��Ĳ����á���������</title>
</head>

<body>
<?php
$text="ףȫ�����򿪷���Ա�ڱ��֮·��һ����˳�����ڷ�����̩�ļ�ƽ���帣����������˳���Ǹ��հ˷����ƾž�ͬ��ʮȫʮ�����¿���ǧ��˳�����¼���PHP���һ����";
if(strlen($text)>30){
	echo substr($text,0,30)."��";
}
else{
	echo $text;
}
?>
</body>
</html>
