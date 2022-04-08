<div class="container-fluid">
    <h1 class="mt-4">Grafik</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Grafik</li>
    </ol>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <div class="row">
        <div class="col">
            <div class="card mb-4">
                <div class="card-header ">
                    <strong>
                        GRAFIK PENJUALAN
                    </strong>
                </div>
				<div class="card-body">
					<canvas id="chartSpeaker" width="auto" height="50"></canvas>
					<canvas id="chartTv" width="auto" height="50"></canvas>
					<canvas id="chartSetrika" width="auto" height="50"></canvas>
					<canvas id="chartSpeakerAktiv" width="auto" height="50"></canvas>
					<canvas id="chartMic" width="auto" height="50"></canvas>
					<canvas id="chartMesinCuci" width="auto" height="50"></canvas>
					<canvas id="chartKipas" width="auto" height="50"></canvas>
					<canvas id="chartKompor" width="auto" height="50"></canvas>
					<canvas id="chartKulkas" width="auto" height="50"></canvas>
				</div>
            </div>
        </div>
    </div>
	<script>
		const speaker = document.getElementById('chartSpeaker').getContext('2d');
		const televisi = document.getElementById('chartTv').getContext('2d');
		const setrika = document.getElementById('chartSetrika').getContext('2d');
		const speakerAktif = document.getElementById('chartSpeakerAktiv').getContext('2d');
		const mic = document.getElementById('chartMic').getContext('2d');
		const mesinCuci = document.getElementById('chartMesinCuci').getContext('2d');
		const kipas = document.getElementById('chartKipas').getContext('2d');
		const kompor = document.getElementById('chartKompor').getContext('2d');
		const kulkas = document.getElementById('chartKulkas').getContext('2d');

		const chartSpeaker = new Chart(speaker, {
			type: 'line',
			// data: [394, 217, 1316, 118, 82],
			options: {
				responsive: true,
				plugins: {
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'DATA PENJUALAN SPEAKER'
					}
				}
			},
			data: {
				labels: ['Noise', 'Rinrei', 'Asatron', 'dat', 'GMC'],
				datasets: [{
					label: '# SPEAKER',
					data: [394, 217, 1316, 118, 82],
					fill: true,
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
					],
					borderColor: [
						'rgba(255, 99, 132, 1)',
					],
					borderWidth: 1
				}]
			},
		});
		const chartTelevisi = new Chart(televisi, {
			type: 'line',
			data: {
				labels: ['Polytron', 'Polytron LED', 'Sharp LED'],
				datasets: [{
					label: '# TELEVISI',
					data: [88, 68, 281],
					fill: true,
					backgroundColor: [
						'rgb(94,137,169)',
					],
					borderColor: [
						'rgb(20,69,105)',
					],
					borderWidth: 1
				}]
			},
		});
		const chartSetrika = new Chart(setrika, {
			type: 'line',
			data: {
				labels: ['Cosmos', 'Electrolux', 'Maspion', 'Miyako', 'Philips'],
				datasets: [{
					label: '# SETRIKA',
					data: [102, 163, 52,217,273],
					fill: true,
					backgroundColor: [
						'rgb(80,98,54)',
					],
					borderColor: [
						'rgb(173,21,21)',
					],
					borderWidth: 1
				}]
			},
		});
		const chartSpeakerAktif = new Chart(speakerAktif, {
			type: 'bar',
			data: {
				labels: ['Dat'],
				datasets: [{
					label: '# SPEAKER AKTIF',
					data: [21],
					fill: true,
					backgroundColor: [
						'rgb(203,126,61)',
					],
					borderColor: [
						'rgb(38,37,37)',
					],
					borderWidth: 1
				}]
			},
		});
		const chartMic = new Chart(mic, {
			type: 'line',
			data: {
				labels: ['JMK','Noise','Targa','Toa'],
				datasets: [{
					label: '# MIC',
					data: [153,20,75,65],
					fill: true,
					backgroundColor: [
						'rgb(176,170,33)',
					],
					borderColor: [
						'rgb(38,37,37)',
					],
					borderWidth: 1
				}]
			},
		});
		const chartMesinCuci = new Chart(mesinCuci, {
			type: 'line',
			data: {
				labels: ['Aqua','Denpo','Polytron','Samsung','Sharp','Thosiba'],
				datasets: [{
					label: '# MESIN CUCI',
					data: [293,141,377,24,144,91],
					fill: true,
					backgroundColor: [
						'rgb(82,21,39)',
					],
					borderColor: [
						'rgb(38,37,37)',
					],
					borderWidth: 1
				}]
			},
		});
		const chartKipas = new Chart(kipas, {
			type: 'line',
			data: {
				labels: ['Arashi General','Cosmos','Miyako','Trisonic'],
				datasets: [{
					label: '# KIPAS ANGIN',
					data: [93,148,49,97],
					fill: true,
					backgroundColor: [
						'rgb(103,111,117)',
					],
					borderColor: [
						'rgb(38,37,37)',
					],
					borderWidth: 1
				}]
			},
		});
		const chartKompor = new Chart(kompor, {
			type: 'line',
			data: {
				labels: ['Quantum','Rinnai'],
				datasets: [{
					label: '# KOMPOR',
					data: [147,209],
					fill: true,
					backgroundColor: [
						'rgb(185,82,65)',
					],
					borderColor: [
						'rgb(38,37,37)',
					],
					borderWidth: 1
				}]
			},
		});
		const chartKulkas = new Chart(kulkas, {
			type: 'line',
			data: {
				labels: ['Aqua','LG', 'Polytron'],
				datasets: [{
					label: '# KULKAS',
					data: [420,23,92],
					fill: true,
					backgroundColor: [
						'rgb(153,17,190)',
					],
					borderColor: [
						'rgb(38,37,37)',
					],
					borderWidth: 1
				}]
			},
		});
	</script>
</div>
