<?php 
use Carbon\Carbon;
?>
<div style="padding: 10px 0px 10px 0px;">
		<table width="595" cellspacing="0" cellpadding="0" border="0" bgcolor="#EEEEDD" align="center">
			<tbody><tr>
				<td><img src="./img/box_login_tl.gif" width="5" height="5"></td>
				<td><img src="./img/pixel.gif" width="1" height="5"></td>
				<td><img src="./img/box_login_tr.gif" width="5" height="5"></td>
			</tr>
			<tr>
				<td><img src="./img/pixel.gif" width="5" height="1"></td>
				<td width="585">
				<div style="padding: 2px 5px 8px 5px;">
				<div style="font-size: 14px; font-weight: bold; color: #666633;">Recently Viewed...</div>
				
				<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
				<tbody><tr>
                 <?php 
                 $recentsql = mysqli_query($conn, "SELECT * FROM videos ORDER BY `lastWatched` DESC LIMIT 5");
                 while ($row2 = mysqli_fetch_assoc($recentsql)) {
                    $id2 = $row2['id'];
					$funnydate = Carbon::parse($row2['lastWatched'])->diffforhumans();
                 ?>
						<td width="20%" align="center">
		
						<a href="video.php?v=<?php echo $id2; ?>"><img src="./thumbs.php?thumb=<?php echo $id2; ?>" style="border: 5px solid #FFFFFF; margin-top: 10px;" width="80" height="60"></a>
						<div class="moduleFeaturedDetails" style="padding-top: 2px;"><?php echo $funnydate; ?></div> 
		
						</td>
                <?php } ?>
						
		
										</tr>
				</tbody></table>
				
				</div>
				</td>
				<td><img src="./img/pixel.gif" width="5" height="1"></td>
			</tr>
			<tr>
				<td><img src="./img/box_login_bl.gif" width="5" height="5"></td>
				<td><img src="./img/pixel.gif" width="1" height="5"></td>
				<td><img src="./img/box_login_br.gif" width="5" height="5"></td>
			</tr>
		</tbody></table>
		</div>