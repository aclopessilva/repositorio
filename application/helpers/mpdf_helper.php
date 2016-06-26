<?php  if(!defined('BASEPATH'))exit('No direct script access allowed');

 

function pdf($html,$filename=null)

{

    require_once("mpdf_lib/mpdf.php");

 

    $mpdf=new mPDF();

 

    
    $mpdf->WriteHTML($html);

 

    // define um nome para o arquivo PDF

    if($filename==null){

        $filename=date("Y-m-d_his").'_impressao.pdf';

    }

 

    $mpdf->Output($filename,'I');

}

 

/* End of file
mpdf_pdf_pi.php */

/* Location:
./system/plugins/mpdf_pi.php */