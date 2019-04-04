<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

	function get_list_product()
	{
		$data = array();
        $iconn = $this->db->conn_id;
        var_dump($iconn);die;
        $sql = "CALL adn_user_payment_current_info(:user_id)";
        $stmt = $iconn->prepare($sql);
        if($stmt)
        {
            $stmt->bindParam(':user_id', $userid, PDO::PARAM_STR);
            if($stmt->execute())
            {
                if($stmt->rowCount() > 0)
                {
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                }
                $stmt->closeCursor();
            }
        }
        return $data;
	}
}
