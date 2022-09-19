<?php
require_once __DIR__ . '/vendor/autoload.php';




$html="
    National ID:1929176715
    Name (Bangla): িমজ�া দ
    Name (Eng): Mirza Dolal
    Birth Of Date1972-05-10
    Father Name: িমজ�া আ�ুল রশীদ
    Mother Name: সুনাতন 
    Address: Division - চ��াম Address: District - চ��াম
    CCOM: চ��াম িস�ট কেপ �ােরশন
    Upozila: বাকলীয়া
    Mouza/Moholla: 
    Additional Mouza/Moholla: �বৗ বাজার
    Village/Road: 
    Additional Village/Road: আহমদ ু র রহমান সড়ক
    Home/Holding No: নুর �মাহা�দ কেলানী
    Post Offiice: চকবাজার Postal Code: 4203
    Region: চ��াম
    Voter At: present
";


$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);

$mpdf->Output("rear.pdf","I");



?>