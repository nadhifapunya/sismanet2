<div class="container-fluid">
	<h3 class="text-dark mb-4">Data Ekstrakulikuler</h3>
	<a href="tambah_agenda"><button class="btn btn-dark">Tambah Ekstrakulikuler</button></a>
		<br><br>
	<div class="card shadow">
		<div class="card-header py-3">
			<p class="text-primary m-0 fw-bold">Ekstrakulikuler</p>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-6 text-nowrap">
					<div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
								<option value="10" selected="">10</option>
								<option value="25">25</option>
								<option value="50">50</option>
								<option value="100">100</option>
							</select>&nbsp;</label></div>
				</div>
				<div class="col-md-6">
					<div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
				</div>
			</div>
			<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
				<table class="table my-0" id="dataTable">
					<thead>
						<tr>
							<td> No</td>
							<td> Nama</td>
							<td> Tentang</td>
							<!-- <td> Sampul</td> -->
							<td> Aksi </td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							$c = 0;
							foreach ($eskul as $es) {
								$c = $c + 	1;
								echo '
								<tr>
								<td>' . $c . '</td>
								<td class=".d-none .d-sm-block">' . $es['nama_eskul'] . '</td>
								<td>' . $es['tentang_eskul'] . '</td>
								
								<td>
								<a class="text-black" href="edit_eskul?id_eskul=' . $es['id_eskul'] . '"><button class="btn btn-dark">Edit</button></a>
								<a class="text-black" href="hapus_eskul?id_eskul=' . $es['id_eskul'] . '"><button class="btn btn-danger">Hapus</button></a>
								</td>
								</tr>
								';
							}
							?>

					</tbody>
					<tfoot>
						<tr>
							<td><strong>No</strong></td>
							<td><strong>Nama</strong></td>
							<td><strong>Tentang</strong></td>
							<td><strong>Aksi</strong></td>
						</tr>
					</tfoot>
				</table>
			</div>
			<div class="row">
				<div class="col-md-6 align-self-center">
					<p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
				</div>
				<div class="col-md-6">
					<nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
						<ul class="pagination">
							<li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
