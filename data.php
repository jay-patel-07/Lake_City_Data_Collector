<?php
$servername="localhost";
$username="root";
$password="";
$data="dataEntry";

$conn=mysqli_connect($servername, $username, $password, $data);
error_reporting(0);
	
$s= $_GET['search'];
echo "<body style='background-color: #c7c7c7'>";
$h= $_GET['check'];
$q="SELECT * from entry where $h='$s' and gate='1'";
$d=mysqli_query($conn, $q);
$t=mysqli_num_rows($d);
if($t!=0)
{
	?>
		<br/>
		<table>
			<tr style="font-size: 23px">
				<th> 😎️ Name&nbsp; </th>
				<th> 🏡️ House No.&nbsp; </th>
				<th> ☎️ Mobile No.&nbsp;</th>
				<th> 🕵️ Profession&nbsp; </th>
				<th> 💉️ Blood Group&nbsp; </th>
				<th> 🙋️ Shabhasad No.&nbsp; </th>
				<th> 📃️ Receipt No.&nbsp; </th>
				<th> 🎁️ D.O.B.(yyyy-mm-dd)&nbsp; </th>
			</tr>
	<?php
	echo "<style>table, th, td{ border: 1px solid black;}</style>";
	while($result=mysqli_fetch_assoc($d))
	{
		$encryption = $result['mobile_no'];
		$ciphering = "AES-128-CTR"; 
		$iv_length = openssl_cipher_iv_length($ciphering); 
		$options = 0; 
		$decryption_iv = '1234567891011121'; 
		$decryption_key = "prOmega"; 
		$kk=openssl_decrypt ($encryption, $ciphering,  $decryption_key, $options, $decryption_iv);	
		
		echo "
			<tr style='font-size:20px; text-align: center;'>
				<td>" .$result['name']. "</td>
				<td>" .$result['house_no']. "</td>
				<td>" .$kk. "</td>
				<td>" .$result['profession']. "</td>
				<td>" .$result['blood']. "</td>
				<td>" .$result['shabhasad']. "</td>
				<td>" .$result['receipt']. "</td>
				<td>" .$result['dob']. "</td>
			</tr>";
		
	}	
}
else
{
	echo "No ".$h. " found";
}
?>
</table>
<br/>

<button onclick='window.print()' style="cursor: pointer;background-color:black;padding: 5px 12px; color: white; font-size:18px">Print</button>

