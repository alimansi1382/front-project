<?php
class DBUserOrderEngin extends DBEngine implements DBEngineLayer2
{
    private $TABLE_NAME = 'order_user';
    public function getAll($where_filed=null, $sorting_by=null, $like_by=null,$result_all=false)
    {
        $result=$this->select(
            $this->TABLE_NAME,
            '*',
            $where_filed,
            $sorting_by,
            $like_by
        );
        if ($result_all) {
            return $result->fetchAll();
        } else {
            return $result->fetchArray();
        }
    }
    public function getFilds($get_filed, $where_filed=null, $sorting_by=null, $like_by=null,$result_all=false)
    {
        $result=$this->select(
            $this->TABLE_NAME,
            $get_filed,
            $where_filed,
            $sorting_by,
            $like_by
        );
        if ($result_all) {
            return $result->fetchAll();
        } else {
            return $result->fetchArray();
        }
    }
    public function insertData($insert_filed)
    {
        $result=$this->insert(
            $this->TABLE_NAME,
            $insert_filed
        );
        return $result;
    }
    public function updateData($update_filed, $where_filed)
    {
        $result=$this->update(
            $this->TABLE_NAME,
            $update_filed,
            $where_filed
        );
        return $result;
    }
    public function deleteData($where_filed,$result_all=false)
    {
        $result=$this->delete(
            $this->TABLE_NAME,
            $where_filed
        );
        return $result;
    }
    /* 
            Custome Function
    */
    function getById($oid)
    {
        $result = $this->getAll(
            array(
                'id'=>$oid
            )
        );
        if (count($result) < 1) {
            return false;
        }
        return $result;
    }
    function add($userid,$reciveDate,$addres,$priceofall,$transportprice,$recivername){
        $datetime = new DateTime();
        $today = $datetime->format('Y-m-d H:i:s');
        $fileds = array(
            'uid'=>$userid,
            'recive_date'=>$reciveDate,
            'saved_date'=>$today,
            'addres'=>$addres,
            'priceAll'=>$priceofall,
            'transport_price'=>$transportprice,
            'reciver_name'=>$recivername,
            'is_pay'=>false,
        );
        return $this->insertData($fileds);
    }
    function payed($oid){
        $this->updateData(
            array('is_pay'=>true),
            array('id'=>$oid)
        );
    }
    function getAllBy_uid_DESC($userid)
    {
        $result = $this->getAll(
            array(
                'uid'=>$userid
            )
            ,array(
                'id'=>'DESC'
            ),
            null,
            true
        );
        if (count($result) < 1) {
            return false;
        }
        return $result;
    }
}