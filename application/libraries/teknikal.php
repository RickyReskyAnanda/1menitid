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

}

/* End of file bk.php */
/* Location: ./application/libraries/bk.php */

?>