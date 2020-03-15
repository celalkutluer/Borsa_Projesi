<?php
$arr = 	array(
		array('John', 30, 'http://learnphp.co'),
		array( 'Joe',  28,  'http://johnmorrisonline.com'),
		array('Amy',  32,  'http://amy.com'),
		array( 'Alex',  22,  'http://thealex.com'),
		array( 'Pat',  40,  'http://patsjourney.com'),
);

?>

<pre><?php //print_r($arr); ?></pre>

<?php
	//array_multisort($arr);
?>

<pre><?php //print_r($arr); ?></pre>

<?php
	function val_sort($array,$key) {

	//Loop through and get the values of our specified key
	foreach($array as $k=>$v) {
		$b[] = strtolower($v[$key]);
	}

	//print_r($b);
	rsort($b);

	echo '<br />';
	//print_r($b);

	foreach($b as $k=>$v) {
		$c[] = $array[$k];
	}

	return $c;
}

$sorted = val_sort($arr, 1);
?>

<pre><?php print_r($sorted); ?></pre>

<?php
/*
?>
<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    function yenile(){    $.ajax({
        url: 'settings/islem.php',
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            document.getElementById("label_deger").innerHTML = response[0].'hisse_id';

            }

        });}
    yenile();
//setInterval(yenile,3000);
</script>
<div class="container">
    <table id="userTable" border="1" >
        <thead>
        <tr>
            <th width="5%">S.no</th>
            <th width="20%">Username</th>
            <th width="20%">Name</th>
            <th width="30%">Email</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<form action="" id="form1" onsubmit="return false">
    <input type="text" name="ad" id="ad_DDD"></br></br>
    <input type="text" name="soyad" id="soyad"></br></br>
    <button type="submit" id="gonder">gönder</button>
    <label id="label_deger"></label>
</form>

*/
?>