<?php
	$pageTitle = "Códigos Postales de Sahuayo";
	$pageDescription = "";
	$pageKeywords = "";
	$ogTitle = "";
	$ogImage = "";
	$ogUrl = "";
	$ogSiteName = "";
	$ogDescription = "";
	require_once 'zip-codes.php';
	require_once 'header.php';
?>
		<div class="gtco-section">
			<div id="codigos-postales" class="gtco-container">
				<!-- BEGIN Fragment Page -->
				<main>
					<h1><?php echo $pageTitle ?></h1>
					<p>El municipio cuenta con los siguientes códigos postales:</p>
					<table>
						<thead>
							<tr>
								<th>C.P.</th>
								<th>Asentamiento</th>
								<th>Tipo</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($codigosPostales as $codigoPostal) { ?>
								<tr>
									<td><?= htmlspecialchars($codigoPostal[0]) ?></td>
									<td>
										<?= htmlspecialchars($codigoPostal[1]) ?>
									</td>
									<td><?= htmlspecialchars($codigoPostal[2]) ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</main>
				<!-- END Fragment Page -->
			</div>
		</div>
<?php
	require_once 'footer.php';
?>
