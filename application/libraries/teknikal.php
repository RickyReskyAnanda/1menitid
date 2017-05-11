<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teknikal
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function namakelink($data){
		return str_replace(" ","-",preg_replace('/[^A-Z a-z0-9\-]/','', strtolower($data)));
	}

	public function invoice($no_urut,$kode_penyedia,$bulan,$tahun){
		if($bulan == 1){
			$bulan = "I";
		}elseif ($bulan ==2) {
			$bulan = "II";
		}elseif ($bulan ==3) {
			$bulan = "III";
		}elseif ($bulan ==4) {
			$bulan = "IV";
		}elseif ($bulan ==5) {
			$bulan = "V";
		}elseif ($bulan ==6) {
			$bulan = "VI";
		}elseif ($bulan ==7) {
			$bulan = "VII";
		}elseif ($bulan ==8) {
			$bulan = "VIII";
		}elseif ($bulan ==9) {
			$bulan = "IX";
		}elseif ($bulan ==10) {
			$bulan = "X";
		}elseif ($bulan ==11) {
			$bulan = "XI";
		}elseif ($bulan ==12) {
			$bulan = "XII";
		}

		return $no_urut."/INV/".$kode_penyedia."/".$bulan."/".$tahun;
	}

}

/* End of file bk.php */
/* Location: ./application/libraries/bk.php */

?>