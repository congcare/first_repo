
<a href="./select.php">xem san pham</a><br>
<a href="./delete.php?id=1">xoa san pham 1</a><br>
<a href="./delete.php?id=2">xoa san pham 2</a><br>

<form method="POST" action="./add.php">
	<label>Them san pham:</label>
	<input type="text" name="product_name">
	<button type="submit"> Them</button>
</form>








<!-- 
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "congke</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 


