<?php

// Список заявок альянса

if (CheckSession ( $_GET['session'] ) == FALSE) die ();
if ( key_exists ('cp', $_GET)) SelectPlanet ($GlobalUser['player_id'], $_GET['cp']);
$now = time();
UpdateQueue ( $now );
$aktplanet = GetPlanet ( $GlobalUser['aktplanet'] );
ProdResources ( $GlobalUser['aktplanet'], $aktplanet['lastpeek'], $now );
UpdatePlanetActivity ( $aktplanet['planet_id'] );
UpdateLastClick ( $GlobalUser['player_id'] );
$session = $_GET['session'];

PageHeader ("bewerbungen");
?>

<!-- CONTENT AREA -->
<div id='content'>
<center>
<table width=519>
<tr><td class=c colspan=2>Bewerbungsubersicht der Allianz [123]</td></tr>
<tr><th colspan=2>Bewerbung von spieler2</th></tr>
<form action="/game/index.php?page=bewerbungen&session=<?=$session;?>&show=95343&sort=1" method=POST>
<tr><th colspan=2>xxxxx</th></tr>
<tr><td class=c colspan=2>Reaktion auf diese Bewerbung</td></tr>
<tr><th>&#160;</th><th><input type=submit name="aktion" value="Aufnehmen"></th></tr>
<tr><th>Begrundung (optional) <span id="cntChars">0</span> / 2000 Zeichen</th><th><textarea name="text" cols=40 rows=10 onkeyup="javascript:cntchar(2000)"></textarea></th></tr>
<tr><th>&#160;</th><th><input type=submit name="aktion" value="Ablehnen"></th></tr>
<tr><td>&#160;</td></tr>
</form>
<tr><th colspan=2>Es liegen 1 Bewerbungen vor. Klicken Sie auf den Namen des gewunschten Spielers um die Bewerbung einzusehen</th></tr>
<tr>
    <td class=c><center><a href="/game/index.php?page=bewerbungen&session=<?=$session;?>&show=95343&sort=1">Bewerber</a></center></td>
    <td class=c><center><a href="/game/index.php?page=bewerbungen&session=<?=$session;?>&show=95343&sort=0">Bewerbungsdatum</a></center></th></tr>
<tr>
    <th><center><a href="/game/index.php?page=bewerbungen&session=<?=$session;?>&show=95343&sort=1">spieler2</a></center></th>
    <th><center>2011-04-07 08:10:15</center></th></tr>
</table><br><br><br><br>
</center>
</div>
<!-- END CONTENT AREA -->

<?php
PageFooter ();
ob_end_flush ();
?>