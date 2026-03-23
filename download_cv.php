<?php
/**
 * download_cv.php
 * 
 * To generate a professional PDF, it is recommended to use a library like Dompdf.
 * Below is a template showing how you would integrate it.
 * 
 * Installation: composer require dompdf/dompdf
 */

// require 'vendor/autoload.php';
// use Dompdf\Dompdf;

// For now, we'll provide a simple download mechanism for your existing file
// or a mock-up of how to trigger a dynamic PDF.

$cv_file = 'Repon_Sheikh_CV.pdf';

if (file_exists($cv_file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="'.basename($cv_file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($cv_file));
    readfile($cv_file);
    exit;
} else {
    echo "<h1>Error</h1>";
    echo "<p>CV File not found. Please ensure 'Repon_Sheikh_CV.pdf' exists in the server root.</p>";
    echo "<p><a href='index.php'>Return to Home</a></p>";
}
?>
