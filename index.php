<?php
$url = array(
"https://i.imgur.com/A6rYDnt.mp4",
"https://i.imgur.com/G1AcXjc.mp4",
"https://i.imgur.com/h7K7H97.mp4",
"https://i.imgur.com/LsT3tWC.mp4",
"https://i.imgur.com/aX7OJkI.mp4",
"https://i.imgur.com/1CoFCyg.mp4",
"https://i.imgur.com/5e6b2on.mp4",
"https://i.imgur.com/kFOVrli.mp4",
"https://i.imgur.com/wGY6uXk.mp4",
"https://i.imgur.com/WBJ8N75.mp4",
"https://i.imgur.com/JAwQd49.mp4",
"https://i.imgur.com/vuUiesW.mp4",
"https://i.imgur.com/4EDE7gv.mp4",
"https://i.imgur.com/f3fNFK9.mp4",
"https://i.imgur.com/Cjchkj2.mp4",
"https://i.imgur.com/dRkpZPz.mp4",
"https://i.imgur.com/zccUghM.mp4"
);
$rd = array_rand($url);
$cc = $url [$rd];
$kiss = array(
"url" => $cc,
"author" => "Trần khương",
"success" => "true",
);
$rdimg = json_encode($kiss);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Trần khương'];
$j = str_replace($i, $t, $rdimg);
echo $j;
