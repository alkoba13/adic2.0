<?php

use pdomysql AS pdomysql;
use post AS post; 

class post{
private $idpost = null;
private $title= null;
private $description= null;
private $date= null;
private $userid= null;
private $categoryid= null;
private $image= null;
private $status=null;
private $column=array(
    'idpost',
    'title',
    'description',
    'userid',
    'date',
    'image',
    );
public function __construct($data=array()){
       $idpost= isset($data['idpost']) ? $data['idpost'] : null;
       $title= isset($data['title']) ? $data['title'] : null;
       $description= isset($data['description']) ? $data['description'] : null;
       $date= isset($data['date']) ? $data['date'] : null;
       $userid= isset($data['userid']) ? $data['userid'] : null;
       $categoryid= isset($data['categoryid']) ? $data['categoryid'] : null;
       $image= isset($data['image']) ? $data['image'] : null;
       $status= isset($data['status']) ? $data['status'] : null;
}
public function getPost($order=array(),$filterVal=null){
        $cOrder='ORDER BY '.$this->column[$order['column']].' '.$order['dir'];
        $filter='having 1 ';
        if ($filterVal!=''&&$filterVal!=null) {
            $filter='and (';
            for ($i=0; $i <count($this->column) ; $i++) { 
                $filter.=$this->column[$i].' like \'%'.$filterVal.'%\' ';
                if ($i+1!=count($this->column)) {
                    $filter.='OR ';
                }
            }
            $filter.=') ';
        }
    	$consulta ="SELECT * from post WHERE userid = ? and status <> 3 ".$filter.$cOrder;
           // error_log(print_r($consulta,true));
    	$db_con= new PDOMYSQL;
        $parametros = array($this->userid);
        $result=$db_con->consultaSeguraIndex($consulta,$parametros);
        return $result;
}
public function setPost(){
        $consulta = "INSERT INTO post (title,description,`date`, userid,image) values(?,?,?,?,?)";
        $parametros=array($this->title,$this->description,$this->date,$this->userid,$this->image);
        $db_con=new PDOMYSQL;
        $result=$db_con->consultaSegura($consulta,$parametros);
  
      	    return true;
}
public function updatePost(){
    $img='';
    $img2='';
    $parametros=array($this->title,$this->description,$this->date);
    if ($this->image!=''&&$this->image!=null) {
       $img=', image = ?';
        $parametros[]=$this->image;
         $img2=' and image= "'.$this->image.'"';
    }
    $parametros[]=$this->idpost;
    	$consulta="UPDATE post SET title =?, description = ?, `date` = ? ".$img." WHERE idpost= ?";
//        error_log(print_r($consulta,true));
//        error_log(print_r($parametros,true));
    	$db_con=new PDOMYSQL;
    	$result=$db_con->consultaSegura($consulta,$parametros);
    $check = 'SELECT * FROM post WHERE title = "'.$this->title.'" and `date` = "'.$this->date.'" and description = "'.$this->description.'" and idpost='.$this->idpost.$img2;
    $result2 = $db_con->consulta($check);
    return $result2;
}
public function deletePost(){
    	$consulta="UPDATE post SET status =? WHERE idpost = ?";
    	$parametros=array($this->status,$this->idpost);
    	$db_con=new PDOMYSQL;
    	$result=$db_con->consultaSegura($consulta,$parametros);
    	if(!empty($result)){
      	    return true;
        }else{
      	    return false;
        }
    }

public function setIdpost($idpost)
    
    {
        $this->idpost=$idpost;
    }
    
    public function getIdpost()
    
    { 
        return $this->idpost;
    } 

    public function setTitle($title)
    
    {
        $this->title=$title;
    }
    
    public function getTitle()
    
    { 
        return $this->title;
    } 

    public function setDescription($description)
    
    {
        $this->description=$description;
    }
    

    public function getDescription()
    
    { 
        return $this->description;
    } 

    public function setDate($date)
    
    {
        $this->date=$date;
    }
    
    public function getDate()
    
    { 
        return $this->date;
    } 

    public function setUserid($userid)
    
    {
        $this->userid=$userid;
    }

    public function getUserid()
    
    { 
        return $this->userid;
    } 

    public function setCategoryid($categoryid)
    
    {
        $this->categoryid=$categoryid;
    }
    
    public function getCategoryid()
    
    { 
        return $this->categoryid;
    } 

    public function setImage($image)
    
    {
        $this->image=$image;
    }
    
    public function getImage()
    
    { 
        return $image->image;
    }
    public function setStatus($status)
    
    {
        $this->status=$status;
    }
    
    public function getStatus()
    
    { 
        return $status->status;
    }  

}
?>