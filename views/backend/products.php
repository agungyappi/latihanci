<style>
.halaman
 {
 margin:10px;
 font-size:11px;
 }

.halaman a
 {

padding:3px;
 background:#990000;
 -moz-border-radius:5px;
 -webkit-border-radius:5px;
 border:1px solid #FFA500;
 font-size:10px;
 font-weight:bold;
 color:#FFF;
 text-decoration:none;

}
 </style>
			<h1><?=$title;?></h1>

			<!-- Table (TABLE) -->
			<br /><br />
			<table>
				<tr>
					<th>No</th>					    
				    <th>Product Name</th>
				    <th>Quantity Per Unit</th>				   				   
				</tr>
				<?php
					
					foreach($array_produk as $row):	
					$id=$row->ProductID;	
					$no++;	
					$css=($no%2==1)? '' : 'class="bg"';
				?>
				<tr <?=$css;?> >
					<td><?=$no;?>.</td>				    
				    <td><?=$row->ProductName;?></td>
				    <td><?=$row->QuantityPerUnit;?></td>				    
				</tr>
				<?php  endforeach; ?>
			</table>

		<div class="halaman">Halaman : <?php echo $halaman;?></div>
