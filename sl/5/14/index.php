<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���ƴ�С���ļ��ϴ�</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style></head>
<body>
<center>
<label>��ѡ��Ҫ�ϴ���ͼƬ��ͼƬ��ʽΪ.jpg����</label>
<form method="post" action="index.php" enctype="multipart/form-data">
	<input type="hidden" name="action" value="upload" />
	<input type="file" name="u_file"/>
	<input type="submit" value="�ϴ�" />
</form>
<?php
	if($_POST[action] == "upload"){			//�ж��ύ��ť�Ƿ�Ϊ��
		$file_path = "./uploads\\";			//����ͼƬ�ڷ������еĴ洢λ��
		$picture_name=$_FILES[u_file][name];	//��ȡ�ϴ�ͼƬ������
		$picture_name=strstr($picture_name , ".");	//ͨ��strstr()������ȡ�ϴ�ͼƬ�ĺ�׺
		if($picture_name!= ".jpg"){					//���ݺ�׺�ж��ϴ�ͼƬ�ĸ�ʽ�Ƿ����Ҫ��
			echo "<script>alert('�ϴ�ͼƬ��ʽ����ȷ,�������ϴ�'); window.location.href='index.php';</script>";
		}else if($_FILES[u_file][tmp_name]){
			move_uploaded_file($_FILES[u_file][tmp_name],$file_path.$_FILES[u_file][name]);		//ִ��ͼƬ�ϴ�
			echo "ͼƬ�ϴ��ɹ�!";
		}
		else
			echo "�ϴ�ͼƬʧ��";
		}
?>
</center>
</body>
</html>
