	<div id="register">
	<h1>Wijzigen</h1>
	<form name="WijzigenFormulier" action="" method="post">
	<table>
		<tr>
			<td><label for="Bedrijfsnaam">Bedrijfsnaam:</label></td>
			<td><input type="text" id="bedrijf_naam" name="Bedrijfsnaam" value="<?php echo $bedrijfs_naam; ?>" /></td>
			<td><?php echo $NameErr; ?></td>
			<td><label for="specialiteit">Specialiteit:</label></td>
			<td><input type="text" id="specialiteit" name="specialiteit" value="<?php echo $specialiteit; ?>"  /></td>
		</tr>
		<tr>
			<td><label for="Adres">Adres:</label></td>
			<td><input type="text" id="Adres" name="adres" value="<?php echo $adres; ?>"  /></td>
			<td><?php echo $AdresErr; ?></td>
			<td><label for="type">Type:</label></td>
			<td><input type="text" id="type" name="type" value="<?php echo $type; ?>"  /></td>
		</tr>
		<tr>
			<td><label for="Postcode">Postcode:</label></td>
			<td><input type="text" id="Postcode" name="postcode" value="<?php echo $postcode; ?>"  /></td>
			<td><?php echo $ZipErr; ?></td>
			<td><label for="bereik">Bereik:</label></td>
			<td><input type="text" id="bereik" name="bereik" value="<?php echo $bereik; ?>"  /></td>
		</tr>
		<tr>		
			<td><label for="Plaats">Plaats:</label></td>
			<td><input type="text" id="Plaats" name="plaats" value="<?php echo $plaats; ?>"  /></td>
			<td><?php echo $CityErr; ?></td>
			<td><label for="aantal">Aantal:</label></td>
			<td><input type="number" id="aantal" name="aantal" value="<?php echo $aantal; ?>"  /></td>
		</tr>
		<tr>		
			<td><label for="provincies">provincie:</label></td>
			<td colspan="2"><input type="text" id="provincie" name="provincie" value="<?php echo $provincie; ?>"  /></td>
			<td><label for="transportmanager">Transport-manager:</label></td>
			<td><input type="text" id="transport_manager" name="transportmanager" value="<?php echo $transport_manager; ?>"  /></td>
			<td><?php echo $TransportErr; ?></td>
		</tr>
		<tr>		
			<td><label for="Telefoon">Telefoon:</label></td>
			<td><input type="text" id="Telefoon" name="telefoon" value="<?php echo $telefoon; ?>"  /></td>
			<td><?php echo $TelErr; ?></td>
			<td><label for="rechtsvorm">Rechtsvorm:</label></td>
			<td><input type="text" id="rechtsvorm" name="rechtsvorm" value="<?php echo $rechtsvorm; ?>"  /></td>
		</tr>
		<tr>		
			<td><label for="Fax">Fax:</label></td>
			<td><input type="text" id="Fax" name="fax" value="<?php echo $fax; ?>"  /></td>
			<td><?php echo $FaxErr; ?></td>
			<td><label for="vergunning">Vergunning:</label></td>
			<td><input type="text" id="vergunning" name="vergunning" value="<?php echo $vergunning; ?>" /></td>
		</tr>
		<tr>
			<td><label for="Email">Bedrijfs E-mail:</label></td>
			<td><input type="text" id="bedrijfs_email" name="bedrijfs_email" value="<?php echo $bedrijfs_email ?>" /></td>
			<td><?php echo $MailErr; ?></td>
			<td><label for="geldigtot">Geldig tot:</label></td>
			<td><input type="text" id="geldigtot" name="geldigtot" value="<?php echo $geldigtot; ?>" /></td>
			<td><?php echo $GeldigErr; ?></td>
		</tr>
		<tr>
			<td><label for="beschrijving">Beschrijving:</label></td>
			<td colspan="5"><textarea id="beschrijving" name="beschrijving" rows="4" cols="50" ><?php echo $beschrijving; ?></textarea></td>
		<tr>			
		<td><input type="submit" name="Wijzigenbedrijf" value="Wijzigen!" /></td>
		</tr>
	</table>
	</form>
	</div>
