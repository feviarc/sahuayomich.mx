<?php
	$pageTitle = "Códigos Postales";
	require_once 'zip-codes.php';
	require_once 'header.php';
?>
		<div class="gtco-section">
			<div id="codigos-postales" class="gtco-container">
				<!-- BEGIN Fragment Page -->
				<main>
					<h1><?php echo $pageTitle ?></h1>
					<p>El municipio de Sahuayo cuenta con los siguientes códigos postales:</p>
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
										<a href="https://www.profitablecpmrate.com/g1p2nct6bg?key=2600d2e9869e46490501c1379f144de7" target="_blank">
											<?= htmlspecialchars($codigoPostal[1]) ?>
										</a>
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
