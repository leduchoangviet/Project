<?php 
	require_once("config/db.class.php");

	/**
	 * 
	 */
	class Product
	{
		public $productID;
		public $productName;
		public $cateID;
		public $price;
		public $quantity;
		public $description;
		public $picture;

		function __construct($pro_name,$cate_id,$price,$quantity,$desc,$picture)
		{
			# code...
			$this->productName = $pro_name;
			$this->cateID=$cate_id;
			$this->price=$price;
			$this->quantity=$quantity;
			$this->description=$desc;
			$this->picture=$picture;
		}


		function save()
		{
			# code...
			$db= new Db();

			$sql= "INSERT INTO product(ProductName,CateID,Price,Quantity,Description,Picture) VALUES ('$this->productName',$this->cateID,$this->price,$this->quantity,'$this->description','$this->picture')";
			$result= $db->query_execute($sql);
			return $result;
		}

		static function list_product(){
			$db=new Db();
			$sql="SELECT * FROM product";
			$result = $db->select_to_array($sql);
			return $result;
		}
	}
?>