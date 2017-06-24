<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$teamname = $request->teamname;
$teammembers = $request->teamMembers;

$mess = "From Server: Team Name is: ".$teamname. "Members : ".$teammembers;
echo $mess;