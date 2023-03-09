<!DOCTYPE html>
<html>
<head>
	<title>Lista de Compras</title>
	<style>
		h1 {
			color: red;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			padding: 20px;
			background-color: yellow;
			border-left: 10px solid yellow;
			border-right: 10px solid yellow;
		}
		label, input[type="text"], input[type="button"] {
			margin: 10px;
		}
		input[type="text"] {
			padding: 5px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px gray;
		}
		input[type="button"] {
			background-color: red;
			color: white;
			border: none;
			padding: 10px;
			border-radius: 5px;
			cursor: pointer;
		}
		ul {
			margin: 0;
			padding: 0;
			list-style-type: none;
		}
		li {
			padding: 10px;
			border-bottom: 1px solid gray;
			font-size: 20px;
		}
		body {
			background-image: url("https://media.istockphoto.com/photos/shopping-cart-with-foods-picture-id1157106624?k=20&m=1157106624&s=612x612&w=0&h=mbTUOY-HYpS7Sj_4RfPHLZu18vGYqHRYXu4G2_Je48g=");
			background-size: cover;
		}
	</style> 
</head>
<body>
	<h1>Lista de Compras</h1>
	<form>
		<label for="item">Item:</label>
		<input type="text" id="item" name="item">
		<input type="button" value="Adicionar" onclick="addItem()">
	</form>
	<ul id="lista">
	</ul>
	<script>
		function addItem() {
			var item = document.getElementById("item").value;
			var li = document.createElement("li");
			li.appendChild(document.createTextNode(item));
			document.getElementById("lista").appendChild(li);
			document.getElementById("item").value = "";
		}
	</script>
</body>
</html>
