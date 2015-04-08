$filename = ''; // $filename = 'alamakota.csv';
$chosen = array(); 
/* $chosen = array (
*    array('ąąąą', 'źźźź', 'ęeęę', 'óóó'),
*    array('łłłłł', 'żżżż')
*/);

$file = fopen($filename, 'w');

foreach ($chosen as $row) {
  fputs($file, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
  fputcsv($file, $row);
}

fclose($file);
