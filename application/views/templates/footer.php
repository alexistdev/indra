</main>
<footer class="py-4 bg-light mt-auto">
	<div class="container-fluid">
		<div class="d-flex align-items-center justify-content-between small">
			<div class="text-muted">Copyright &copy; Your Website 2021</div>
			<!-- <div>
				<a href="#">Privacy Policy</a>
				&middot;
				<a href="#">Terms &amp; Conditions</a>
			</div> -->
		</div>
	</div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		crossorigin="anonymous"></script>
<script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/'); ?>assets/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets/'); ?>assets/demo/chart-bar-demo.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/demo/datatables-demo.js"></script>
<script>
	$('#tabelProduk').DataTable( {
		dom: 'Blfrtip',
		buttons: {
			buttons: [
				{
					extend: 'excel',
					className: 'btn btn-success',
					title: 'Data Produk',
					exportOptions: {
						columns: [0,1,2,3,4,5,6,7]
					},
				},
				{
					extend: 'pdfHtml5',
					className: 'btn btn-danger',
					orientation: 'portrait',
					pageSize: 'LEGAL',
					title: 'Data Produk',
					exportOptions: {
						columns: [0,1,2,3,4,5,6,7]
					},
				}
			],
			dom: {
				button: {
					className: 'btn'
				}
			}
		},
	} );
	$('#tabelMerek').DataTable( {
		dom: 'Blfrtip',
		buttons: {
			buttons: [
				{
					extend: 'excel',
					className: 'btn btn-success',
					title: 'Data',
					exportOptions: {
						columns: [0,1]
					},
				},
				{
					extend: 'pdfHtml5',
					className: 'btn btn-danger',
					orientation: 'portrait',
					pageSize: 'LEGAL',
					title: 'Data',
					exportOptions: {
						columns: [0,1]
					},
				}
			],
			dom: {
				button: {
					className: 'btn'
				}
			}
		},
	} );
	$('#tabelRiwayat').DataTable( {
		dom: 'Blfrtip',
		buttons: {
			buttons: [
				{
					extend: 'excel',
					className: 'btn btn-success',
					title: 'Riwayat Penjualan',
					exportOptions: {
						columns: [0,1,2,3,4,5,6]
					},
				},
				{
					extend: 'pdfHtml5',
					className: 'btn btn-danger',
					orientation: 'portrait',
					pageSize: 'LEGAL',
					title: 'Riwayat Penjualan',
					exportOptions: {
						columns: [0,1,2,3,4,5,6]
					},
				}
			],
			dom: {
				button: {
					className: 'btn'
				}
			}
		},
	} );
</script>
</body>
</html>
