<?php

require_once ROOTPATH . 'vendor/autoload.php';


// Load the Excel file or use your existing data source
// ...

// Create a new PDF instance
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Table to PDF');
$pdf->SetSubject('Table to PDF');

// Set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('helvetica', '', 12);

// Output HTML table content to PDF
ob_start();
?>

              <table class="table datatable" border="1">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Date</th>
                    <th scope="col">Harga Awal</th>
                    <th scope="col">Deskripsi Barang</th>
                  </tr>
                </thead>
                <tbody>
      <?php

  $no=1;
  foreach($manda as $erwin){
  ?>  

  <tr>
    <td><?= $no++ ?></td>
    <td><?=$erwin->nama_barang?></td>
    <td><?= $erwin ->tgl?></td>
    <td><?= $erwin ->harga_awal?></td>
    <td><?= $erwin ->deskripsi_barang?></td>
  </tr>
  <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

              <?php
$html = ob_get_contents();
ob_end_clean();

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();

// Save the PDF file
$pdf->Output('output.pdf', 'I'); // 'D' for download, 'F' for save to file

exit;