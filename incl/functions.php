<?php

function get_adventures()
{
	$qry = "SELECT * FROM adventure";
	$records = run_qury($qry);
	return $records;
}
function add_adventures($heading, $tripDate, $duration,	$summary)
{
	$qry = "INSERT INTO adventure(heading,tripDate,duration,summary)
		VALUES ('$heading', '$tripDate', $duration,	'$summary')";
	run_qury_only($qry);

}


function run_qury_only($sql)
{
	$cn1 = conn();
	mysqli_query($cn1, $sql);
}

function run_qury($sql)
{
	$cn1 = conn();
	$rs = mysqli_query($cn1, $sql);
	$data = array();
	while ($row = mysqli_fetch_assoc($rs)) {
		$data[] = $row;
	}
	return	$data;
}
?>