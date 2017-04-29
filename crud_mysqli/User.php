<?php 

class User
{
	
	private $db;

	private $id;
	private $name;
	private $email;
	
	function __construct(Mysqli $mysqli)
	{
		$this->db =  $mysqli;
	}

	public function find($id){
		$stmt = $this->db->stmt_init();
		$stmt->prepare("SELECT * FROM user WHERE id = ?");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->bind_result($id,$name,$email);
		$stmt->fetch();

		return array("id"=>$id,"name"=>$name,"email"=>$email);
	}

	public function list($order = null){
		if($order){
			$sql = "SELECT * FROM user ORDER BY {$order}";
		}else{
			$sql = "SELECT * FROM user";
		}		

		$query = $this->db->query($sql);
		return $query->fetch_all(MYSQLI_ASSOC);
	}

	public function insert(){
		$stmt = $this->db->stmt_init();
		$stmt->prepare("INSERT INTO user(name,email) VALUES(?,?)");
		$stmt->bind_param("ss",$this->name,$this->email);
		$stmt->execute();
		return $stmt->insert_id;
	}

	public function update(){
		$stmt = $this->db->stmt_init();
		$stmt->prepare("UPDATE user SET name = ?, email = ? WHERE id = ?");
		$stmt->bind_param("ssi",$this->name,$this->email,$this->id);
		
		return $stmt->execute();
	}

	public function delete($id){
		$stmt = $this->db->stmt_init();
		$stmt->prepare("DELETE FROM user WHERE id = ?");
		$stmt->bind_param("i",$id);
		
		return $stmt->execute();
	}


    
    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    
    public function getName()
    {
        return $this->name;
    }

    
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    
    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}

