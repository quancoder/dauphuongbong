<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

	function get_all_county_by_province($_id_province, $_status)
	{
		$data = array();
        $iconn = $this->db_slave->conn_id;
        $sql = "CALL get_all_county_by_province(:_id_province, :_status)";

        $stmt = $iconn->prepare($sql);
        if($stmt)
        {
            $stmt->bindParam(':_id_province', $_id_province, PDO::PARAM_INT);
            $stmt->bindParam(':_status', $_status, PDO::PARAM_INT);
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

    function get_all_province($_status)
    {
        $data = array();
        $iconn = $this->db_slave->conn_id;
        $sql = "CALL get_all_province(:_status)";

        $stmt = $iconn->prepare($sql);
        if($stmt)
        {
            $stmt->bindParam(':_status', $_status, PDO::PARAM_INT);
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

    function get_all_shop_by_county($_id_county, $_status)
    {
        $data = array();
        $iconn = $this->db_slave->conn_id;
        $sql = "CALL get_all_shop_by_county(:_id_county, :_status)";

        $stmt = $iconn->prepare($sql);
        if($stmt)
        {
            $stmt->bindParam(':_id_county', $_id_county, PDO::PARAM_INT);
            $stmt->bindParam(':_status', $_status, PDO::PARAM_INT);
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
