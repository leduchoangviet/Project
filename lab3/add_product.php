<?php 
	require_once("Entities/product.class.php");

	if (isset($_POST['btnsubmit'])) {
		$producName=$_POST['txtName'];
		$cateID=$_POST['txtCateID'];
		$price=$_POST['txtprice'];
		$quantity=$_POST['txtquantity'];
		$description=$_POST['txtdesc'];
		$picture=$_POST['txtpic'];
		# code...
		echo "<p>$producName $cateID $price $quantity $description $picture<p>";
		$newProduct= new Product($producName,$cateID,$price,$quantity,$description,$picture);

		$result= $newProduct->save();
		

		if (!$result) {
			header("Location: add_product.php?fallure");
		}
		else{
			header("Location: add_product.php?succed");
		}
		
	}
?>

<?php 
	include_once("header.php");
?>

<?php 
	if (isset($_GET["inserted"])) {
		echo "<h2>them san pham thanh cong </h2>";
		# code...
	}
?>

<form method="post">
	<div class="row">
		<div class="lbltitle">
			<label>ten san pham</label>
		</div>
		<div class="lblinput">
			<input type="text" name="txtName" value="<?php echo isset($_POST["txtName"]) ? $_POST['txtName']:""; ?>"/>
		</div>
	</div>
	<div class="row">
		<div class="lbltitle">
			<label>mo ta san pham</label>
		</div>
		<div class="lblinput">
			<textarea name="txtdesc" cols="21" rows="10" value="<?php echo isset($_POST['txtdesc']) ? $_POST['txtdesc']:""; ?>"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="lbltitle">
			<label>so luong san pham</label>
		</div>
		<div class="lblinput">
			<input type="text" name="txtquantity" value="<?php echo isset($_POST["txtquantity"]) ? $_POST['txtquantity']:""; ?>"/>
		</div>
	</div>
	<div class="row">
		<div class="lbltitle">
			<label>gia san pham</label>
		</div>
		<div class="lblinput">
			<input type="text" name="txtprice" value="<?php echo isset($_POST["txtprice"]) ? $_POST['txtprice']:""; ?>"/>
		</div>
	</div>
	<div class="row">
		<div class="lbltitle">
			<label>loai san pham</label>
		</div>
		<div class="lblinput">
			<input type="text" name="txtCateID" value="<?php echo isset($_POST["txtCateID"]) ? $_POST['txtCateID']:""; ?>"/>
		</div>
	</div>
	<div class="row">
		<div class="lbltitle">
			<label>hinh anh</label>
		</div>
		<div class="lblinput">
			<input type="text" name="txtpic" value="<?php echo isset($_POST["txtpic"]) ? $_POST['txtpic']:""; ?>"/>
		</div>
	</div>
	<div class="row">
		<dir class="submit">
			<input type="submit" name="btnsubmit" value="them san pham">
		</dir>
	</div>

</form>