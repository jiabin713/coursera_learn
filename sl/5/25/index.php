<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ�ú���explode()��ȫ����ʡ�������Զ��Ž��зָ�</title>
</head>

<body>
<?php
$content = "����,�Ϻ�,���,����,�ӱ�,ɽ��,����,����,������,����,�㽭,����,����,����,ɽ��,����,����,����,����";
$data=explode(",",$content);
for($index=0;$index<count($data);$index++){							//����ѭ��
echo $data[$index];
echo "</br>";
}
?>
</body>
</html>
