<?php
     session_start();
//������֤��ͼƬ
     Header("Content-type: image/PNG");
     $im = imagecreate(44,18); // ��һ��ָ����ߵ�ͼƬ
     $back = ImageColorAllocate($im, 245,245,245); // ���屳����ɫ
     imagefill($im,0,0,$back); //�ѱ�����ɫ��䵽�ոջ�������ͼƬ��
     $vcodes = "";
     srand((double)microtime()*1000000);
     //����4λ����
     for($i=0;$i<4;$i++){
     $font = ImageColorAllocate($im, rand(100,255),rand(0,100),rand(100,255)); // ���������ɫ
     $authnum=rand(1,9);
     $vcodes.=$authnum;
     imagestring($im, 5, 2+$i*10, 1, $authnum, $font);
     }
     $_SESSION['VCODE'] = $vcodes;
 
     for($i=0;$i<100;$i++) //�����������
     {
     $randcolor = ImageColorallocate($im,rand(0,255),rand(0,255),rand(0,255));
     imagesetpixel($im, rand()%70 , rand()%30 , $randcolor); // �����ص㺯��
     }
     ImagePNG($im);
     ImageDestroy($im);
	 
 ?>



