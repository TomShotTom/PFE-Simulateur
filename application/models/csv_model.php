<?php
class Csv_model extends CI_Model {
     
   public function save_csv($filename)
	{
		
		system("/var/www/QL-PFE/application/script_traitement_files/php csv.php ".$filename,$returnVal);

		echo $returnVal;
		/*
		$row = 1; 

		// open the file with read permission 
		if (($handle = fopen($filename, "r")) !== FALSE) 
		{ 
			while (($data = fgetcsv($handle, 0, ",")) !== FALSE) 
			{ 
			//count the number of fields 
			$num = count($data); 
			echo "<p> $num fields in line $row: <br /></p>\n"; $row++; 
			
			for ($c=0; $c < $num; $c++) 
			{ 
				echo $data[$c] . "<br />\n"; 
			} 

			//end for 
			} //end while
		
		  fclose($handle); //close file handler 
		}*/

		

	}
    

	
}
?>