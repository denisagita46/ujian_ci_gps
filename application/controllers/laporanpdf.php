<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        
	$pdf= new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(200,8, "FORMULIR PERMOHONAN PEMBIAYAAN",0, 'C');
   $query = $this->db->query('SELECT * FROM registrasi_pembiayaan a inner join tujuan_pembiayaan b on a.id_tujuan_pembiayaaan = b.id_tujuan_pembiayaaan');

foreach ($query->result() as $row)
{       

        $pdf->Cell(0,4,'DATA PERMOHONAN PEMBIAYAAN : ',0,1,'L');	
        $pdf->Ln(2);
		$pdf->Cell(0,4,'Pembiayaan yang di mohon : '.$row->jml_pembiayaan,0,1,'L');	
        $pdf->Ln(2);
		$pdf->Cell(0,4,'Tujuan Pembiayaan : '.$row->tujuan_pembiayaan,0,1,'L');	
		$pdf->Ln(2);
		$pdf->Cell(0,4,'Jangan Waktu Pembiayaan : '.$row->jangka_waktu,0,1,'L');	
		$pdf->Ln(2);
		$pdf->Cell(0,4,'DATA PEMOHON : ',0,1,'L');
		$pdf->Ln(2);
		$pdf->Cell(0,4,'Nama Lengkap KTP : '.$row->name,0,1,'L');		
        $pdf->Ln(2);
		$pdf->Cell(0,4,'Tempat & Tanggal Lahir : '.$row->tempat_lahir . $row->tgl_lahir ,0,1,'L');	
		$pdf->Ln(2);
		$pdf->Cell(0,4,'Alamat Rumah (Lengkap) : '.$row->alamat,0,1,'L');	
		$pdf->Ln(2);
		$pdf->Cell(0,4,'Status Rumah : '.$row->status_rumah,0,1,'L');	
		$pdf->Ln(2);
		$pdf->Cell(0,4,'Status Marital : '.$row->status_marital,0,1,'L');
		$pdf->Ln(2);
		$pdf->Cell(0,4,'Nama Istri/suami KTP : '.$row->nama_pasangan,0,1,'L');
		$pdf->Ln(2);
		$pdf->Cell(0,4,'Nama Ibu Kandung : '.$row->nama_ibu_kandung,0,1,'L');
		$pdf->Ln(2);
		$pdf->Cell(0,4,'Jumlah Tanggungan : '.$row->jumlah_tanggungan,0,1,'L');
		$pdf->Ln(2);
		$pdf->Cell(0,4,'NPWP : '.$row->npwp,0,1,'L');
		$pdf->Ln(2);
		$pdf->Cell(0,4,'DATA BANK : ',0,1,'L');
		$pdf->Ln(2);
		$pdf->Cell(0,4,'Nama Bank : '.$row->nama_bank,0,1,'L');
		$pdf->Ln(2);
		$pdf->Cell(0,4,'Nomor Rekening : '.$row->no_rek_bank,0,1,'L');
		$pdf->Ln(2);
		$pdf->Cell(0,4,'Atas Nama : '.$row->atas_nama_rek,0,1,'L');
		$pdf->Ln(2);
		$pdf->Cell(0,4,'PERNYATAAN : ',0,1,'L');
		$pdf->Ln(2);
		$pdf->Cell(0,4,'1. Terhadap permohonan pembiayaan ini, Saya memberi Kuasa kepada Divisi HRD PT. INDOSAT/PT ',0,1,'L');
		$pdf->Cell(0,4,'    IM2/KOPINDOSAT/PERSADA untuk melakukan pemotongan gaji saya sesuai dengan jumlah yang diajukan  ',0,1,'L');
		$pdf->Cell(0,4,'    oleh KOPINDOSAT setiap periode penggajian selama jangka waktu pembiayaan.  ',0,1,'L');
		$pdf->Ln(2);
		$pdf->Cell(0,4,'2. Apabila pada suatu saat karena sesuatu hal saya mengundurkan diri dari PT. INDOSAT/PT ',0,1,'L');
		$pdf->Cell(0,4,'    IM2/KOPINDOSAT/PERSADA dan pembiayaan saya belum lunas, maka KOPINDOSAT melalui HRD   ',0,1,'L');
		$pdf->Cell(0,4,'    INDOSAT/PT IM2/KOPINDOSAT/PERSADA berhak melakukan pemotongan gaji terakhir dan hak-hak saya   ',0,1,'L');
		$pdf->Cell(0,4,'    sebesar sisa hutang saya kepada KOPINDOSAT. Apabila setelah pemotongan tersebut hutang saya masih    ',0,1,'L');
		$pdf->Cell(0,4,'    belum lunas, maka saya bersedia untuk melunasi kepada KOPINDOSAT dengan memberikan jaminan ',0,1,'L');
		$pdf->Cell(0,4,'    berupa sertifikat tanah, atau surat tanda kepemilikan kendaraan, dan atau surat berharga lainnya kepada ',0,1,'L');
		$pdf->Cell(0,4,'    PIHAK PERTAMA ',0,1,'L');
		$pdf->Ln(2);
		$pdf->Cell(0,4,'3. Dengan ini saya menyatakan bahwa informasi diatas dibuat dengan sebenar – benarnya dan tidak ada  ',0,1,'L');
        $pdf->Cell(0,4,'    paksaan dari pihak lain dan saya bersedia dituntut apabila saya mengingkari pernyataan tersebut diatas.   ',0,1,'L');
        $pdf->Ln(2);
        $pdf->Cell(0,4,'4. Semua dokumen yang telah diserahkan adalah milik Koperasi dan tidak akan saya tarik kembali. ',0,1,'L');
        $pdf->Ln(4);
        $pdf->Cell(2,3,'Mengetahui                            Jakarta, 3 Sept 2019',0,1,'L');
		$pdf->Ln(15);
		$pdf->Cell(2,3,'                                                    Materai 6000',0,1,'L');
		$pdf->Ln(2);
        $pdf->Cell(2,3,'[tes]                                      [Ahmad Adam Julidar]',0,1,'L');
		$pdf->Ln(2);
		$pdf->Cell(2,3,'suami/istri                                     Pemohon',0,1,'L');
		$pdf->Ln(4);
		$pdf->Cell(0,4,'DATA YANG HARUS DILAMPIRKAN  : ',0,1,'L');
		$pdf->Ln(1);
		$pdf->Cell(0,4,'1. Foto copy ID Card',0,1,'L');
		$pdf->Ln(1);
		$pdf->Cell(0,4,'2. Foto copy Kartu Tanda Penduduk (KTP) Anggota dan Suami/Istri (bagi yang sudah menikah). ',0,1,'L');
        $pdf->Ln(1);
		$pdf->Cell(0,4,'3. Foto copy Kartu Keluarga (KK). ',0,1,'L');
		$pdf->Ln(1);
		$pdf->Cell(0,4,'4. Slip gaji (asli) bulan terakhir.',0,1,'L');
		$pdf->Ln(1);
		$pdf->Cell(0,4,'5. Foto copy Cover Buku Tabungan.',0,1,'L');
		$pdf->Ln(1);
		$pdf->Cell(0,4,'6. Foto copy Akta Cerai bagi yang sudah bercerai ',0,1,'L');
		$pdf->Ln(1);
		$pdf->Cell(0,4,'7. Foto copy NPWP',0,1,'L');

 }        
        $pdf->Output();
		
    }
}