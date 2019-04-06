<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

	function dp_product_get_all()
	{
		$data = array();
        $iconn = $this->db_slave->conn_id;
        $sql = "CALL dp_product_get_all()";
        $stmt = $iconn->prepare($sql);
        if($stmt)
        {
            if($stmt->execute())
            {
                if($stmt->rowCount() > 0)
                {
                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
                $stmt->closeCursor();
            }
        }
        return $data;
	}
}
