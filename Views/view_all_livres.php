Résultat de votre recherche :
<br />


<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th>ISBN</th>
			<th>Titre</th>
			<th>Thème</th>
			<th>Nombre de page</th>
			<th>Format</th>
			<th>Auteur</th>
			<th>Editeur</th>
			<th>Année d'édition</th>
			<th>Prix</th>
			<th>Langue</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($livres as $l) : ?>
			<tr>
				<td> <?= $l->isbn ?> </td>
				<td> <?= $l->titre ?> </td>
				<td> <?= $l->theme ?> </td>
				<td> <?= $l->nombreDePage ?> </td>
				<td> <?= $l->format ?> </td>
				<td> <?= $l->nomAuteur ?> <?= $l->prenomAuteur ?></td>
				<td> <?= $l->editeur ?> </td>
				<td> <?= $l->anneeEdition ?> </td>
				<td> <?= $l->prix ?> </td>
				<td> <?= $l->langue ?> </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>