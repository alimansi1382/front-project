<?php
class DBProductEngin extends DBEngine implements DBEngineLayer2
{
    private $TABLE_NAME = 'product';
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
    public function GetAllLikeBy($q) {
        return $this->getAll(
            null,
            null,
            array('name'=>$q),
            true
        );
    }
    public function GetById($pid)
    {
        return $this->getAll(
            array('id'=> $pid)
        );
    }
    public function add($name,$catg,$price_component,$price,$image_src)
    {
        $data = array(
            'name'=>$name,
            'catg'=>$catg,
            'price_component'=>$price_component,
            'price'=>$price,
            'image_src'=>$image_src,
        );
        return $this->insertData($this->TABLE_NAME,$data);
    }
}