<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/dashboard.css"/>
	<link rel="stylesheet" href="css/leaflet.css"/>
	<link rel="stylesheet" href="css/L.Control.MousePosition.css" />
	<link rel="stylesheet" href="css/L.Control.ZoomBox.css" />
    <link rel="stylesheet" href="css/L.Control.Layers.Tree.css" crossorigin=""/>
	<link rel="stylesheet" href="css/L.Control.HtmlLegend.css" />
	<script src="js/Chart.js"></script>	
	<script src="chart_dashboard.js"></script>

    <script src="js/leaflet.js"></script>
	<script src="js/L.Control.MousePosition"></script>
    <script src="js/L.Control.Layers.Tree.js"></script>
	<script src="js/L.Control.ZoomBox.js"></script>
	<script src="js/L.Control.HtmlLegend.min.js"></script>
	
    <!-- Load Esri Leaflet from CDN -->
    <script src="js/esri-leaflet.js"
    integrity="sha512-YZ6b5bXRVwipfqul5krehD9qlbJzc6KOGXYsDjU9HHXW2gK57xmWl2gU6nAegiErAqFXhygKIsWPKbjLPXVb2g=="
    crossorigin=""></script>
				
    <!-- Shapefile JS -->
    <script src="shp.min.js"> </script>	
	
	<!-- Leaflet shapefile control -->
	<script src="L.Control.Shapefile.js"></script>
	<link rel="stylesheet" href="L.Control.Shapefile.css"/>	
	
    <!--Add draw plugin -->
    <link rel='stylesheet' href='//api.tiles.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.2/leaflet.draw.css' />
    <script src='//api.tiles.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.2/leaflet.draw.js'></script>	
	
	<script src='js/L.Control.MousePosition.js'></script>
	<link href='css/L.Control.MousePosition.css' rel='stylesheet' />	
	
	<!-- add L.Control.Zoominfo js and css after Leaflet -->
	<link rel="stylesheet" href="css/L.Control.Zoominfo.css" />
	<script src="js/L.Control.Zoominfo.js" ></script>

	<!--<script src="http://maps.google.com/maps/api/js?v=3.2&sensor=false&key=AIzaSyAMtW--rrAcWlBrQt7KYbQQhMqKayuoi0g"></script>-->
	<script src="js/raphael-2.1.2-min.js"></script>
	<script src="js/morris-0.5.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	
<script src='Leaflet.fullscreen.min.js'></script>
<link href='leaflet.fullscreen.css' rel='stylesheet' />	
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />

    <link rel="stylesheet" type="text/css" href="css/leaflet-bootstrapmodal.css" />
    <script type="text/javascript" src="js/leaflet-bootstrapmodal.js"></script>

	<script type="text/javascript">
	$(function() {
		$('#menu123 a').click(function() {
			var url = $(this).attr('href');
			$('#container2').load(url);
			return false;
		});	
	});
	</script>	
<style type='text/css'>
</style>
</head>
<body>

<div class="row">
	
<div class="col-xs-12 col-sm-12 col-lg-12">
          <!-- solid sales graph -->
          <div class="box box-solid bg-white">
            <div class="box-header" style="background:#403e3e">
              <i class="fa fa-globe"></i>
              <h3 class="box-title">Peta Informasi Infrastruktur Reklame</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn bg-red btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body border-radius-none">
			<div style="width: 100%; height: 580px" id="map"></div> 						
            </div>
            <!-- /.box-body -->
</div>	
</div>
			



<div class="col-xs-12 col-sm-12 col-lg-12">
          <!-- solid sales graph -->
          <div class="box box-solid bg-white">
            <div class="box-header" style="background:#403e3e">
              <i class="fa fa-bar-chart-o"></i>
              <h3 class="box-title">Dashboard Monitoring Reklame</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn bg-red btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body border-radius-none">
<div class="col-xs-6 col-sm-1-5 col-lg-2-5 bordered"">
	<div class="contoh">
	  <div>	
            <table align="center">
			<tr>
			<th text-align="left">
		    <span style="font-size:36px;color:white">
			<i class="fa fa-bullseye fa-lg"></i>
		    </span>	
			</th>
			<th text-align="right">
			<span style="font-size:36px;color:white">
			<?
			$ambil_recent = mysqli_query($con,"select count(*) as jmh from titik_reklame where masa_berlaku_berakhir > curdate();");			
			while($hasil_recent= mysqli_fetch_array($ambil_recent)){
			echo $hasil_recent['jmh'];
			}
			?>	
			</span>	
			<br>
			<span style="font-size:16px;color:white">
			Infrastruktur
			</span>	
			
			</th>
			</tr>
			</table>
	  </div>
	  <div class="panel-footer" style="background:#403e3e;opacity: 1">
		<a href="index.php?page=list_database_aktif"  style="color:white"><i class="glyphicon glyphicon-circle-arrow-right"></i>&nbsp;Detail</a>
	  </div>
	</div>
</div>


<div class="col-xs-6 col-sm-1-5 col-lg-2-5 bordered">
	<div class="contoh">
	  <div>				
            <table align="center">
			<tr>
			<th style="text-align:right">
		    <span style="font-size:36px;color:white">
			<i class="fa fa-copyright fa-lg"></i>
		    </span>	
			</th>
			
			<th text-align="right">
			<span style="font-size:36px;color:white">
			<?
			$ambil_recent = mysqli_query($con,"select count(*) as jmh from titik_reklame where masa_berlaku_berakhir > curdate();");			
			while($hasil_recent= mysqli_fetch_array($ambil_recent)){
			echo $hasil_recent['jmh'];
			}
			?>	
			</span>	
			<br>
			<span style="font-size:16px;color:white">
			Frame Konten
			</span>	
			
			</th>
			</tr>
			</table>
	  </div>
	  <div class="panel-footer" style="background:#403e3e;opacity: 1">
		<a href="index.php?page=list_database"  style="color:white"><i class="glyphicon glyphicon-circle-arrow-right"></i>&nbsp;Detail</a>
	  </div>
	</div>
</div>
			

<div class="col-xs-6 col-sm-1-5 col-lg-2-5 bordered">
	<div class="contoh">
	  <div>				
            <table align="center">
			<tr>
			<th text-align="left">
		    <span style="font-size:36px;color:white">
			<i class="fa fa-arrow-circle-up fa-lg"></i>
		    </span>	
			</th>
			<th text-align="right">
			<span style="font-size:36px;color:white">
			<?
			$ambil_recent = mysqli_query($con,"select count(*) as jmh from titik_reklame WHERE masa_berlaku_berakhir < SUBDATE( CURDATE( ) , 7 )");			
			while($hasil_recent= mysqli_fetch_array($ambil_recent)){
			echo $hasil_recent['jmh'];
			}
			?>	
			</span>	
			<br>
			<span style="font-size:16px;color:white">
			Reklame Aktif
			</span>	
			
			</th>
			</tr>
			</table>
	  </div>
	  <div class="panel-footer" style="background:#403e3e;opacity: 1">
		<a href="index.php?page=list_database_expire"  style="color:white"><i class="glyphicon glyphicon-circle-arrow-right"></i>&nbsp;Detail</a>
	  </div>
	</div>
</div>
			
			
<div class="col-xs-6 col-sm-1-5 col-lg-2-5 bordered">
	<div class="contoh">
	  <div>	
            <table align="center">
			<tr>
			<th text-align="left">
		    <span style="font-size:36px;color:white">
			<i class="fa fa-arrow-circle-down fa-lg"></i>
		    </span>	
			</th>
			<th text-align="right">
			<span style="font-size:36px;color:white">
			<?
			$ambil_recent = mysqli_query($con,"select count(*) as jmh from titik_reklame WHERE masa_berlaku_berakhir > SUBDATE( CURDATE( ) , 7 )");		
			while($hasil_recent= mysqli_fetch_array($ambil_recent)){
			echo $hasil_recent['jmh'];
			}
			?>	
			</span>	
			<br>
			<span style="font-size:16px;color:white">
			Reklame Expired 
			</span>	
			
			</th>
			</tr>
			</table>
	  </div>
	  <div class="panel-footer" style="background:#403e3e;opacity: 1">
		<a href="index.php?page=list_database_expire-7"  style="color:white"><i class="glyphicon glyphicon-circle-arrow-right"></i>&nbsp;Detail</a>
	  </div>
	</div>
</div>

			
<div class="col-xs-6 col-sm-1-5 col-lg-2-5 bordered">
	<div class="contoh">
	  <div>	
            <table align="center">
			<tr>
			<th text-align="left">
		    <span style="font-size:36px;color:white">
			<i class="fa fa-ban fa-lg"></i>
		    </span>	
			</th>
			<th text-align="right">
			<span style="font-size:36px;color:white">
			<?
			$ambil_recent = mysqli_query($con,"select count(*) as jmh from titik_reklame");			
			while($hasil_recent= mysqli_fetch_array($ambil_recent)){
			echo $hasil_recent['jmh'];
			}
			?>	
			</span>	
			<br>
			<span style="font-size:16px;color:white">
			Ilegal
			</span>	
			
			</th>
			</tr>
			</table>
	  </div>
	  <div class="panel-footer" style="background:#403e3e;opacity: 1">
		<a href="index.php?page=list_database"  style="color:white"><i class="glyphicon glyphicon-circle-arrow-right"></i>&nbsp;Detail</a>
	  </div>
	</div>
</div>			

  <div class="row">
        <div class="col-md-6">
            <div style="text-align:left;margin-top:15px;">
			<h5 style="font-weight: bold;">Grafik Perbandingan Target dan Capaian</h5>

			<canvas id="kanvasku2" height="250" width="550"></canvas>
			<script>
					var barData = {
						labels : ["Jan","Feb","Mar","Apr","Mei","Jun","Jul"],
						datasets : [
							{
								fillColor : "rgba(250,128,114,0.5)",
								strokeColor : "rgba(255,227,200,0.5)",
								data : [20,30,50,70,90,20,45]
							},
							{
								fillColor : "rgba(151,187,205,0.5)",
								strokeColor : "rgba(151,187,205,1)",
								data : [90,10,60,80,10,20,15]
							}
						]
						
					}
				var barKu = new Chart(document.getElementById("kanvasku2").getContext("2d")).Line(barData);			
				</script>
            </div>
        </div>
        <div class="col-md-6">
            <div style="text-align:left;margin-top:15px;">
			<h5 style="font-weight: bold;">Grafik Perbandingan Jumlah Infrastruktur</h5>
			<canvas id="kanvasku" height="250" width="550"></canvas>
			<script>
					var barData = {
						labels : ["Jan","Feb","Mar","Apr","Mei","Jun","Jul"],
						datasets : [
							{
								fillColor : "rgba(250,128,114,0.5)",
								strokeColor : "rgba(220,220,220,1)",
								data : [20,30,50,70,90,20,45]
							},
							{
								fillColor : "rgba(151,187,205,0.5)",
								strokeColor : "rgba(151,187,205,1)",
								data : [10,40,60,80,100,20,45]
							}
						]
						
					}
				var barKu = new Chart(document.getElementById("kanvasku").getContext("2d")).Bar(barData);			
				</script>
            </div>
        </div>
  </div><!-- /.row -->
  
  <div class="row">
        <div class="col-md-3"><br>
            <h5 style="color:#403e3e; font-weight: bold; font-size:17px;">Jenis Reklame</h5>
			<div style="text-align:center;margin-top:20px;">
			<canvas id="donut" width="165" height="165"></canvas>	
			<script>
			var donutEl = document.getElementById("donut").getContext("2d");
			var donut = new Chart(donutEl).Doughnut(
				// Datas
				[
					{
						value: 300,
						color:"#cb2e03",
						highlight: "#FF5A5E",
						label: "Red"
					},
					{
						value: 50,
						color: "#008080",
						highlight: "#5AD3D1",
						label: "Green"
					},
					{
						value: 100,
						color: "#403e3e",
						highlight: "#FFC870",
						label: "Yellow"
					}
				],
				// Options
				{
					segmentShowStroke : true,
					segmentStrokeColor : "#fff",
					segmentStrokeWidth : 2,
					percentageInnerCutout : 50,
					animationSteps : 100,
					animationEasing : "easeOutBounce",
					animateRotate : true,
					animateScale : false,
					responsive: true,
					maintainAspectRatio: true,
					showScale: true,
					animateScale: true
				});
			</script>	
            </div>

        </div>
        <div class="col-md-3"><br>
            <h5 style="color:#403e3e; font-weight: bold; font-size:17px;">Status Reklame</h5>
			<div style="text-align:center;margin-top:20px;">
			<canvas id="donut2" width="165" height="165"></canvas>	
			<script>
			var donutEl = document.getElementById("donut2").getContext("2d");
			var donut = new Chart(donutEl).Doughnut(
				// Datas
				[
					{
						value: 300,
						color:"#cb2e03",
						highlight: "#FF5A5E",
						label: "Red"
					},
					{
						value: 50,
						color: "#008080",
						highlight: "#5AD3D1",
						label: "Green"
					},
					{
						value: 100,
						color: "#403e3e",
						highlight: "#FFC870",
						label: "Yellow"
					}
				],
				// Options
				{
					segmentShowStroke : true,
					segmentStrokeColor : "#fff",
					segmentStrokeWidth : 2,
					percentageInnerCutout : 50,
					animationSteps : 100,
					animationEasing : "easeOutBounce",
					animateRotate : true,
					animateScale : false,
					responsive: true,
					maintainAspectRatio: true,
					showScale: true,
					animateScale: true
				});
			</script>	

            </div>

        </div>
        <div class="col-md-3"><br>
			<h5 style="color:#403e3e; font-weight: bold; font-size:17px;">Lokasi Reklame</h5>
            <div style="text-align:center;margin-top:20px;">
			<canvas id="donut3" width="165" height="165"></canvas>	
			<script>
			var donutEl = document.getElementById("donut3").getContext("2d");
			var donut = new Chart(donutEl).Doughnut(
				// Datas
				[
					{
						value: 300,
						color:"#cb2e03",
						highlight: "#FF5A5E",
						label: "Red"
					},
					{
						value: 50,
						color: "#008080",
						highlight: "#5AD3D1",
						label: "Green"
					},
					{
						value: 100,
						color: "#403e3e",
						highlight: "#FFC870",
						label: "Yellow"
					}
				],
				// Options
				{
					segmentShowStroke : true,
					segmentStrokeColor : "#fff",
					segmentStrokeWidth : 2,
					percentageInnerCutout : 50,
					animationSteps : 100,
					animationEasing : "easeOutBounce",
					animateRotate : true,
					animateScale : false,
					responsive: true,
					maintainAspectRatio: true,
					showScale: true,
					animateScale: true
				});
			</script>	

            </div>

        </div>		

        <div class="col-md-3"><br>
			<h5 style="color:#403e3e; font-weight: bold; font-size:17px;">Konten Reklame</h5>
            <div style="text-align:center;margin-top:20px;">
			<canvas id="donut4" width="165" height="165"></canvas>	
			<script>
			var donutEl = document.getElementById("donut4").getContext("2d");
			var donut = new Chart(donutEl).Doughnut(
				// Datas
				[
					{
						value: 30,
						color:"#cb2e03",
						highlight: "#FF5A5E",
						label: "Red"
					},
					{
						value: 80,
						color: "#008080",
						highlight: "#5AD3D1",
						label: "Green"
					},
					{
						value: 10,
						color: "#403e3e",
						highlight: "#FFC870",
						label: "Yellow"
					}
				],
				// Options
				
				{
	
					segmentShowStroke : true,
					segmentStrokeColor : "#fff",
					segmentStrokeWidth : 2,
					percentageInnerCutout : 0,
					animationSteps : 100,
					animationEasing : "easeOutBounce",
					animateRotate : true,
					animateScale : false,
					responsive: true,
					maintainAspectRatio: true,
					showScale: true,
					animateScale: true
				});
			</script>	
            </div>
        </div>
		</div><!-- /.row -->	  
	</div>
	<!-- /.box-body -->
	</div>	
</div>			
			
</div>

<script>
	var LeafIcon = L.Icon.extend({
	});
	var IconIlok1 = new LeafIcon({iconUrl: 'icons/ilok1.png'}),
		IconIlok2 = new LeafIcon({iconUrl: 'images/marker-icon.png'}),
		IconIlok3 = new LeafIcon({iconUrl: 'icons/ilok3.png'}),
		IconIlok4 = new LeafIcon({iconUrl: 'icons/ilok4.png'}),
		IconIlok5 = new LeafIcon({iconUrl: 'icons/ilok5.png'}),
		IconIlok6 = new LeafIcon({iconUrl: 'icons/ilok6.png'});
		
    // create popup contents
    //var customPopup = "Judul Informasi<br/><table width=100%><tr><td>1</td><td>1</td></tr><tr><td>2</td><td>1</td></tr></table>";
    
    // specify popup options 
    var customOptions =
        {
        'maxWidth': '500',
        'className' : 'custom'
        }
	//////////////////////////////////////////////////////////////////////////	
		var fasum = L.layerGroup();
                $.getJSON('../peta/reklame.geojson', function (data) {
                    L.geoJson(data, {
                        onEachFeature: function (feature, layer) {
                            layer.bindPopup(''+
							'<table width=100%><tr><td>No Urut</td><td>:</td><th>'+feature.properties.No_Urut+'</th></tr>' +
							'<tr><td>No Berkas</td><td>:</td><th>'+feature.properties.No__Berkas+'</th></tr>' +	
							'<tr></tr></table>',customOptions).addTo(fasum)
							;							
                        },
                        pointToLayer: function (feature, latlng) {
							return L.marker(latlng, {icon: IconIlok2});
                        }
                    }).addTo(fasum);
                });
	//////////////////////////////////////////////////////////////////////////////		
	//////////////////////////////////////////////////////////////////////////	
		var reklame = L.layerGroup();
                $.getJSON('../peta/reklame.geojson', function (data) {
                    L.geoJson(data, {
                        onEachFeature: function (feature, layer) {
                            layer.bindPopup(''+
							'<table width=100%><tr><td>No Urut</td><td>:</td><th>'+feature.properties.No_Urut+'</th></tr>' +
							'<tr><td>No Berkas</td><td>:</td><th>'+feature.properties.No__Berkas+'</th></tr>' +
							'<tr><td>Tgl_Input</td><td>:</td><th>'+feature.properties.Tgl_Input+'</th></tr>' +
							'<tr><td>No IZIN</td><td>:</td><th>'+feature.properties.No__IZIN+'</th></tr>' +
							'<tr><td>Tgl IZIN</td><td>:</td><th>'+feature.properties.Tgl__IZIN+'</th></tr>' +
							'<tr><td>REALISASI</td><td>:</td><th>'+feature.properties.REALISASI+'</th></tr>' +	
							
							'<tr><td>STATUS</td><td>:</td><th>'+feature.properties.STATUS+'</th></tr>' +	
							'<tr><td>JENIS LOKASI</td><td>:</td><th>'+feature.properties.JENIS_LOKA+'</th></tr>' +	
							'<tr><td>PAJAK</td><td>:</td><th>'+feature.properties.PAJAK+'</th></tr>' +	
							'<tr><td>ALAMAT</td><td>:</td><th>'+feature.properties.ALAMAT_P_1+'</th></tr>' +	
								
							'<tr></tr></table>',customOptions).addTo(reklame)
							;							
                        },
                        pointToLayer: function (feature, latlng) {
							//return L.marker(latlng, {icon: orangeIcon});
                            return L.circleMarker(latlng, {
                                // Stroke properties
                                color: 'yellow',
                                opacity: 0.75,
                                weight: 2,

                                // Fill properties
                                fillColor: '#000056',
                                fillOpacity: 0.9,

                                radius: 5
                            });
                        }
                    }).addTo(reklame);
                });
	//////////////////////////////////////////////////////////////////////////////		
	var ilok1 = L.layerGroup();
	<?
	$ambil_recent = mysqli_query($con,"select * from bidang_ilok where status_masa='Berlaku'");			
	while($hasil_recent= mysqli_fetch_array($ambil_recent)){
	?>
	L.marker([<?=$hasil_recent['koordinat'];?>], {icon: IconIlok1}).bindPopup('' +
	'<table class="table table-hover table-responsive" style="width:100%;background:"><tr><td>Nomor Ilok</td><td>:</td><th><?=$hasil_recent['no_ilok'];?></th></tr>' +
	'<tr><td>Nama Perusahaan</td><td>:</td><th><?=$hasil_recent['nama_perusahaan'];?></th></tr>' +
	'<tr><td>Alamat Perusahaan</td><td>:</td><th><?=$hasil_recent['alamat_perusahaan'];?></th></tr>' +
	'<tr><td>Telepone / Faximile</td><td>:</td><th><?=$hasil_recent['telepon'];?></th></tr>' +
	'<tr><td>Alamat Lokasi</td><td>:</td><th><?=$hasil_recent['alamat_lokasi'];?></th></tr>' +
	'<tr><td>Luas (Ha)</td><td>:</td><th><?=$hasil_recent['luas'];?></th></tr>' +
	'<tr><td>Koordinat (Lintang,Bujur)</td><td>:</td><th><?=$hasil_recent['koordinat'];?></th></tr>' +
	'<tr><td>Tanggal Terbit</td><td>:</td><th><?=indonesian_date2($hasil_recent['tanggal_terbit']);?></th></tr>' +
	'<tr><td>Tanggal Habis</td><td>:</td><th><?=indonesian_date2($hasil_recent['tanggal_habis']);?></th></tr>' +	
	'<tr><td>Status Masa</td><td>:</td><th><?=$hasil_recent['status_masa'];?></th></tr>' +
	'<tr><td>Status Kesesuaian</td><td>:</td><th><?=$hasil_recent['status_kesesuaian'];?></td></tr>' +
	'<tr><td>Keterangan</td><td>:</td><th><?=$hasil_recent['keterangan'];?></th></tr>' +
	'<tr></tr></table>',customOptions).addTo(ilok1)
	<?}?>	
	;
	
	
	//////////////////////////////////////////////////////////////////////////////	
	var jln = L.layerGroup();	
	function addDataToMap11(data, jln) {
		var dataLayer = L.geoJson(data, {
		style: function (feature) {
		  return {
			'weight': 2,
			'opacity': 1,
			'color': 'yellow',
			'dashArray': '1 5 2 2 1',
			'fillOpacity': 0.7,
			'fillColor': 'yellow'
		  }
		},	
			onEachFeature: function(feature, layer) {
				var popupText = ""	
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><td>NAMA JALAN</td><td>:</td><td><b>" + feature.properties.NAMA_JALAN + "</b></td></tr>"
		+ "<tr><td>Kelas JALAN</td><td>:</td><td><b>" + feature.properties.KELAS_JALA + "</b></td></tr>"	
		+ "</table>"	
		+ "<a href='index.php?page=dashboard3&id=" + feature.properties.NAMA_JALAN + "' class=\"list-group-item  list-group-item-success  test01\"><span class=\"glyphicon glyphicon-link\"></span> BUKA PETA "+ feature.properties.NAMA_JALAN +"</a>"				
		//+ "<a href='#' class=\"list-group-item  list-group-item-success  produk\"><span class=\"glyphicon glyphicon-link\"></span> BUKA PETA "+ feature.properties.KABKOT +"</a>"						
		+ "";				
				layer.bindPopup(popupText)
				map.getBounds(layer.getBounds());
				}
				
			});
		dataLayer.addTo(jln);
	}
	$.getJSON("../peta/grade_lokasi__1.geojson", function(data) {addDataToMap11(data,jln); });		
	//////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////	
	var jln2 = L.layerGroup();	
	function addDataToMap12(data, jln2) {
		var dataLayer = L.geoJson(data, {
		style: function (feature) {
		  return {
			'weight': 2,
			'opacity': 1,
			'color': 'orange',
			'dashArray': '1 5 2 2 1',
			'fillOpacity': 0.7,
			'fillColor': 'orange'
		  }
		},	
			onEachFeature: function(feature, layer) {
				var popupText = ""	
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><td>NAMA JALAN</td><td>:</td><td><b>" + feature.properties.NAMA_JALAN + "</b></td></tr>"
		+ "<tr><td>Kelas JALAN</td><td>:</td><td><b>" + feature.properties.KELAS_JALA + "</b></td></tr>"	
		+ "</table>"	
		+ "<a href='index.php?page=dashboard3&id=" + feature.properties.NAMA_JALAN + "' class=\"list-group-item  list-group-item-success  test01\"><span class=\"glyphicon glyphicon-link\"></span> BUKA PETA "+ feature.properties.NAMA_JALAN +"</a>"				
		//+ "<a href='#' class=\"list-group-item  list-group-item-success  produk\"><span class=\"glyphicon glyphicon-link\"></span> BUKA PETA "+ feature.properties.KABKOT +"</a>"						
		+ "";				
				layer.bindPopup(popupText)
				map.getBounds(layer.getBounds());
				}
				
			});
		dataLayer.addTo(jln2);
	}
	$.getJSON("../peta/grade_lokasi__2.geojson", function(data) {addDataToMap12(data,jln2); });		
	//////////////////////////////////////////////////////////////////////////////	
	//////////////////////////////////////////////////////////////////////////////	
	var jln3 = L.layerGroup();	
	function addDataToMap13(data, jln3) {
		var dataLayer = L.geoJson(data, {
		style: function (feature) {
		  return {
			'weight': 2,
			'opacity': 1,
			'color': 'green',
			'dashArray': '1 5 2 2 1',
			'fillOpacity': 0.7,
			'fillColor': 'green'
		  }
		},	
			onEachFeature: function(feature, layer) {
				var popupText = ""	
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><td>NAMA JALAN</td><td>:</td><td><b>" + feature.properties.NAMA_JALAN + "</b></td></tr>"
		+ "<tr><td>Kelas JALAN</td><td>:</td><td><b>" + feature.properties.KELAS_JALA + "</b></td></tr>"	
		+ "</table>"	
		+ "<a href='index.php?page=dashboard3&id=" + feature.properties.NAMA_JALAN + "' class=\"list-group-item  list-group-item-success  test01\"><span class=\"glyphicon glyphicon-link\"></span> BUKA PETA "+ feature.properties.NAMA_JALAN +"</a>"				
		//+ "<a href='#' class=\"list-group-item  list-group-item-success  produk\"><span class=\"glyphicon glyphicon-link\"></span> BUKA PETA "+ feature.properties.KABKOT +"</a>"						
		+ "";				
				layer.bindPopup(popupText)
				map.getBounds(layer.getBounds());
				}
				
			});
		dataLayer.addTo(jln3);
	}
	$.getJSON("../peta/grade_lokasi__3.geojson", function(data) {addDataToMap13(data,jln3); });		
	//////////////////////////////////////////////////////////////////////////////	
	//////////////////////////////////////////////////////////////////////////////	
	var jln4 = L.layerGroup();	
	function addDataToMap14(data, jln4) {
		var dataLayer = L.geoJson(data, {
		style: function (feature) {
		  return {
			'weight': 2,
			'opacity': 1,
			'color': 'green',
			'dashArray': '1 5 2 2 1',
			'fillOpacity': 0.7,
			'fillColor': 'green'
		  }
		},	
			onEachFeature: function(feature, layer) {
				var popupText = ""	
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><td>NAMA JALAN</td><td>:</td><td><b>" + feature.properties.NAMA_JALAN + "</b></td></tr>"
		+ "<tr><td>Kelas JALAN</td><td>:</td><td><b>" + feature.properties.KELAS_JALA + "</b></td></tr>"	
		+ "</table>"	
		+ "<a href='index.php?page=dashboard3&id=" + feature.properties.NAMA_JALAN + "' class=\"list-group-item  list-group-item-success  test01\"><span class=\"glyphicon glyphicon-link\"></span> BUKA PETA "+ feature.properties.NAMA_JALAN +"</a>"				
		//+ "<a href='#' class=\"list-group-item  list-group-item-success  produk\"><span class=\"glyphicon glyphicon-link\"></span> BUKA PETA "+ feature.properties.KABKOT +"</a>"						
		+ "";				
				layer.bindPopup(popupText)
				map.getBounds(layer.getBounds());
				}
				
			});
		dataLayer.addTo(jln4);
	}
	$.getJSON("../peta/grade_lokasi__4.geojson", function(data) {addDataToMap14(data,jln4); });		
	//////////////////////////////////////////////////////////////////////////////		
	
	var kab = L.layerGroup();	
	function addDataToMap1(data, kab) {
		var dataLayer = L.geoJson(data, {
		style: function (feature) {
		  return {
			'weight': 5,
			'opacity': 1,
			'color': '#d24759',
			'dashArray': '1 5 2 2 1',
			'fillOpacity': 0.1,
			'fillColor': '#94cb71'
		  }
		},	
			onEachFeature: function(feature, layer) {
				var popupText = ""
		+ "<div class=\"container-fluid\">"
		+ "<div class=\"panel panel-light\">"
		+ "<div class=\"panel-heading\" style=\"color:white;background:Seagreen;text-align:center\">AREA KAB/KOTA " + feature.properties.KABKOT+"</div>"
		+ "<div class=\"panel-body\">"		
				+ "<ul class=\"nav nav-tabs\">"
				+ "<li class=\"active\"><a data-toggle=\"tab\" href=\"#home\"><span class=\"glyphicon glyphicon-home\"></span></a></li>"
				+ "<li><a data-toggle=\"tab\" href=\"#menu1\">ILOK</a></li>"
				+ "<li><a data-toggle=\"tab\" href=\"#menu2\">IUP</a></li>"
				+ "<li><a data-toggle=\"tab\" href=\"#menu3\">HGU</a></li>"
				+ "</ul>"
				+ "<div class=\"tab-content\">"	  
				+ "<div id=\"home\" class=\"tab-pane fade in active\">"		
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><td>KODE PROVINSI</td><td>:</td><td><b>" + feature.properties.PROVNO + "</b></td></tr>"
		+ "<tr><td>NAMA PROVINSI</td><td>:</td><td><b>" + feature.properties.PROVINSI + "</b></td></tr>"
		+ "<tr><td>KODE KAB/KOTA</td><td>:</td><td><b>" + feature.properties.IDKAB2 + "</b></td></tr>"
		+ "<tr><td>NAMA KAB/KOTA</td><td>:</td><td><b>" + feature.properties.KABKOT + "</b></td></tr>"		
		+ "<tr><td>POTENSI KEBUN SAWIT (HA)</td><td>:</td><td><b>100.000.000</b></td></tr>"		
		+ "</table>"
				+ "</div>"
				+ "<div id=\"menu1\" class=\"tab-pane fade tampildata\">"		
				+ "<br>Perusahaan status ILOK :<br><br>"		
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><th>NAMA PERUSAHAAN</th><th>LUAS (HA)</th><th>TANGGAL</th></tr>"
		+ "<tr><td>PT. DEWA SAWIT BANGUN</td><td>1000</td><td>08-01-2013</td></tr>"
		+ "<tr><td>PT. EFG</td><td>2000</td><td>18-12-2014</td></tr>"
		+ "<tr><td>CV. XYZ</td><td>500</td><td>20-11-2016</td></tr>"		
		+ "</table>"				
				+ "</div>"
				+ "<div id=\"menu2\" class=\"tab-pane fade tampildata\">"	
				+ "<br>Perusahaan status IUP :<br><br>"	
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><th>NAMA PERUSAHAAN</th><th>LUAS (HA)</th><th>TANGGAL</th></tr>"
		+ "<tr><td>PT. CAHAYA SAWIT</td><td>1000</td><td>08-01-2013</td></tr>"
		+ "<tr><td>PT. EFG</td><td>2000</td><td>18-12-2014</td></tr>"
		+ "<tr><td>CV. XYZ</td><td>500</td><td>20-11-2016</td></tr>"	
		+ "<tr><td>PT. ABC</td><td>1000</td><td>08-01-2013</td></tr>"
		+ "<tr><td>PT. EFG</td><td>2000</td><td>18-12-2014</td></tr>"
		+ "<tr><td>CV. XYZ</td><td>500</td><td>20-11-2016</td></tr>"
		+ "<tr><td>PT. ABC</td><td>1000</td><td>08-01-2013</td></tr>"
		+ "<tr><td>PT. EFG</td><td>2000</td><td>18-12-2014</td></tr>"
		+ "<tr><td>CV. XYZ</td><td>500</td><td>20-11-2016</td></tr>"		
		+ "</table>"				
				+ "</div>"				
				+ "<div id=\"menu3\" class=\"tab-pane fade tampildata\">"
				+ "<br>Perusahaan status HGU :<br><br>"		
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><th>NAMA PERUSAHAAN</th><th>LUAS (HA)</th><th>TANGGAL</th></tr>"
		+ "<tr><td>PT. SAWIT PUTRA</td><td>1000</td><td>08-01-2013</td></tr>"
		+ "<tr><td>PT. EFG</td><td>2000</td><td>18-12-2014</td></tr>"
		+ "<tr><td>CV. XYZ</td><td>500</td><td>20-11-2016</td></tr>"		
		+ "<tr><td>PT. ABC</td><td>1000</td><td>08-01-2013</td></tr>"
		+ "<tr><td>PT. EFG</td><td>2000</td><td>18-12-2014</td></tr>"
		+ "<tr><td>CV. XYZ</td><td>500</td><td>20-11-2016</td></tr>"		
		+ "</table>"				
				+ "</div>"
				+ "</div>"		
		+ "</div>"
		+ "</div>"
		+ "</div>"		
		+ "<a href='index.php?page=dashboard3&id=" + feature.properties.IDKAB2 + "' class=\"list-group-item  list-group-item-success  test01\"><span class=\"glyphicon glyphicon-link\"></span> BUKA PETA "+ feature.properties.KABKOT +"</a>"				
		//+ "<a href='#' class=\"list-group-item  list-group-item-success  produk\"><span class=\"glyphicon glyphicon-link\"></span> BUKA PETA "+ feature.properties.KABKOT +"</a>"						
		+ "";				
				layer.bindPopup(popupText)
				map.getBounds(layer.getBounds());
				}
				
			});
		dataLayer.addTo(kab);
	}
	$.getJSON("../peta/kota.geojson", function(data) {addDataToMap1(data,kab); });	
	/////////////////////////// akhir layer kab //////////////////////////////////////////////////////////////////////////////////////	
	////////// awal layer kecamatan ////////////////////////////////////////////////////////////////////////////////////////
	var kec = L.layerGroup();	
	function addDataToMap(data, kec) {
		var dataLayer = L.geoJson(data, {
		style: function (feature) {
		  return {
			'weight': 3,
			'opacity': 1,
			'color': '#a15000',
			'dashArray': '',
			'fillOpacity': 0.1,
			'fillColor': 'white'
		  }
		},	
			onEachFeature: function(feature, layer) {
				var popupText = ""
		+ "<div class=\"container-fluid\">"
		+ "<div class=\"panel panel-light\">"
		+ "<div class=\"panel-heading\" style=\"color:white;background:Seagreen;text-align:center\">AREA KECAMATAN " + feature.properties.KECAMATAN+"</div>"
		+ "<div class=\"panel-body\">"		
				+ "<ul class=\"nav nav-tabs\">"
				+ "<li class=\"active\"><a data-toggle=\"tab\" href=\"#home\"><span class=\"glyphicon glyphicon-home\"></span></a></li>"
				+ "<li><a data-toggle=\"tab\" href=\"#menu1\">ILOK</a></li>"
				+ "<li><a data-toggle=\"tab\" href=\"#menu2\">IUP</a></li>"
				+ "<li><a data-toggle=\"tab\" href=\"#menu3\">HGU</a></li>"
				+ "</ul>"
				+ "<div class=\"tab-content\">"	  
				+ "<div id=\"home\" class=\"tab-pane fade in active\">"		
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><td>KODE PROVINSI</td><td>:</td><td><b>" + feature.properties.PROVNO + "</b></td></tr>"
		+ "<tr><td>NAMA PROVINSI</td><td>:</td><td><b>" + feature.properties.PROVINSI + "</b></td></tr>"
		+ "<tr><td>KODE KAB/KOTA</td><td>:</td><td><b>" + feature.properties.IDKAB2 + "</b></td></tr>"
		+ "<tr><td>NAMA KAB/KOTA</td><td>:</td><td><b>" + feature.properties.KABKOT + "</b></td></tr>"		
		+ "<tr><td>POTENSI KEBUN SAWIT (HA)</td><td>:</td><td><b>100.000.000</b></td></tr>"		
		+ "</table>"
				+ "</div>"
				+ "<div id=\"menu1\" class=\"tab-pane fade tampildata\">"		
				+ "<br>Perusahaan status ILOK :<br><br>"		
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><th>NAMA PERUSAHAAN</th><th>LUAS (HA)</th><th>TANGGAL</th></tr>"
		+ "<tr><td>PT. DEWA SAWIT BANGUN</td><td>1000</td><td>08-01-2013</td></tr>"
		+ "<tr><td>PT. EFG</td><td>2000</td><td>18-12-2014</td></tr>"
		+ "<tr><td>CV. XYZ</td><td>500</td><td>20-11-2016</td></tr>"		
		+ "</table>"				
				+ "</div>"
				+ "<div id=\"menu2\" class=\"tab-pane fade tampildata\">"	
				+ "<br>Perusahaan status IUP :<br><br>"	
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><th>NAMA PERUSAHAAN</th><th>LUAS (HA)</th><th>TANGGAL</th></tr>"
		+ "<tr><td>PT. CAHAYA SAWIT</td><td>1000</td><td>08-01-2013</td></tr>"
		+ "<tr><td>PT. EFG</td><td>2000</td><td>18-12-2014</td></tr>"
		+ "<tr><td>CV. XYZ</td><td>500</td><td>20-11-2016</td></tr>"	
		+ "<tr><td>PT. ABC</td><td>1000</td><td>08-01-2013</td></tr>"
		+ "<tr><td>PT. EFG</td><td>2000</td><td>18-12-2014</td></tr>"
		+ "<tr><td>CV. XYZ</td><td>500</td><td>20-11-2016</td></tr>"
		+ "<tr><td>PT. ABC</td><td>1000</td><td>08-01-2013</td></tr>"
		+ "<tr><td>PT. EFG</td><td>2000</td><td>18-12-2014</td></tr>"
		+ "<tr><td>CV. XYZ</td><td>500</td><td>20-11-2016</td></tr>"		
		+ "</table>"				
				+ "</div>"				
				+ "<div id=\"menu3\" class=\"tab-pane fade tampildata\">"
				+ "<br>Perusahaan status HGU :<br><br>"		
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><th>NAMA PERUSAHAAN</th><th>LUAS (HA)</th><th>TANGGAL</th></tr>"
		+ "<tr><td>PT. SAWIT PUTRA</td><td>1000</td><td>08-01-2013</td></tr>"
		+ "<tr><td>PT. EFG</td><td>2000</td><td>18-12-2014</td></tr>"
		+ "<tr><td>CV. XYZ</td><td>500</td><td>20-11-2016</td></tr>"		
		+ "<tr><td>PT. ABC</td><td>1000</td><td>08-01-2013</td></tr>"
		+ "<tr><td>PT. EFG</td><td>2000</td><td>18-12-2014</td></tr>"
		+ "<tr><td>CV. XYZ</td><td>500</td><td>20-11-2016</td></tr>"		
		+ "</table>"				
				+ "</div>"
				+ "</div>"		
		+ "</div>"
		+ "</div>"
		+ "</div>"		
		+ "<a href='index.php?page=dashboard3&id=" + feature.properties.IDKAB2 + "' class=\"list-group-item  list-group-item-success  test01\"><span class=\"glyphicon glyphicon-link\"></span> BUKA PETA "+ feature.properties.KABKOT +"</a>"				
		//+ "<a href='#' class=\"list-group-item  list-group-item-success  produk\"><span class=\"glyphicon glyphicon-link\"></span> BUKA PETA "+ feature.properties.KABKOT +"</a>"	
				+ "";					
				layer.bindPopup(popupText)
				map.getBounds(layer.getBounds());
				}
				
			});
		dataLayer.addTo(kec);
	}
	$.getJSON("../peta/bekasikec.geojson", function(data) {addDataToMap(data,kec); });	
	/////////////////////////// akhir layer kecamatan //////////////////////////////////////////////////////////////////////////////////////
	////////////////////////// awal layer desa       ////////////////////////////////////////////////////////////////////////////////////////
	var desa = L.layerGroup();	
	function addDataToMap2(data, desa) {
		var dataLayer = L.geoJson(data, {
		style: function (feature) {
		  return {
			'weight': 1,
			'opacity': 1,
			'color': '#d24759',
			'dashArray': '',
			'fillOpacity': 0.1,
			'fillColor': '#94cb71'
		  }
		},	
			onEachFeature: function(feature, layer) {
				var popupText = ""
				var popupText = ""
		+ "<div class=\"container-fluid\">"
		+ "<div class=\"panel panel-light\">"
		+ "<div class=\"panel-heading\" style=\"color:white;background:Seagreen;text-align:center\">AREA KEL/DESA " + feature.properties.KECAMATAN+"</div>"
		+ "<div class=\"panel-body\">"		
				+ "<ul class=\"nav nav-tabs\">"
				+ "<li class=\"active\"><a data-toggle=\"tab\" href=\"#home\"><span class=\"glyphicon glyphicon-home\"></span></a></li>"
				+ "<li><a data-toggle=\"tab\" href=\"#menu1\">ILOK</a></li>"
				+ "<li><a data-toggle=\"tab\" href=\"#menu2\">IUP</a></li>"
				+ "<li><a data-toggle=\"tab\" href=\"#menu3\">HGU</a></li>"
				+ "</ul>"
				+ "<div class=\"tab-content\">"	  
				+ "<div id=\"home\" class=\"tab-pane fade in active\">"		
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><td>KODE PROVINSI</td><td>:</td><td><b>" + feature.properties.PROVNO + "</b></td></tr>"
		+ "<tr><td>NAMA PROVINSI</td><td>:</td><td><b>" + feature.properties.PROVINSI + "</b></td></tr>"
		+ "<tr><td>KODE KAB/KOTA</td><td>:</td><td><b>" + feature.properties.IDKAB2 + "</b></td></tr>"
		+ "<tr><td>NAMA KAB/KOTA</td><td>:</td><td><b>" + feature.properties.KABKOT + "</b></td></tr>"		
		+ "<tr><td>REKLAME</td><td>:</td><td><b>-</b></td></tr>"		
		+ "</table>"
				+ "</div>"
				+ "<div id=\"menu1\" class=\"tab-pane fade tampildata\">"		
				+ "<br>Perusahaan status ILOK :<br><br>"		
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><th>NAMA PERUSAHAAN</th><th>LUAS (HA)</th><th>TANGGAL</th></tr>"
		+ "<tr><td>PT. DEWA SAWIT BANGUN</td><td>1000</td><td>08-01-2013</td></tr>"
		+ "<tr><td>PT. EFG</td><td>2000</td><td>18-12-2014</td></tr>"
		+ "<tr><td>CV. XYZ</td><td>500</td><td>20-11-2016</td></tr>"		
		+ "</table>"				
				+ "</div>"
				+ "<div id=\"menu2\" class=\"tab-pane fade tampildata\">"	
				+ "<br>Perusahaan status IUP :<br><br>"	
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><th>NAMA PERUSAHAAN</th><th>LUAS (HA)</th><th>TANGGAL</th></tr>"
		+ "<tr><td>PT. CAHAYA SAWIT</td><td>1000</td><td>08-01-2013</td></tr>"	
		+ "</table>"				
				+ "</div>"				
				+ "<div id=\"menu3\" class=\"tab-pane fade tampildata\">"
				+ "<br>Perusahaan status HGU :<br><br>"		
		+ "<table class=\"table table-striped table-hover table-responsive table-bordered\" style=\"width:100%\">"
		+ "<tr><th>NAMA PERUSAHAAN</th><th>LUAS (HA)</th><th>TANGGAL</th></tr>"
		+ "<tr><td>PT. SAWIT PUTRA</td><td>1000</td><td>08-01-2013</td></tr>"		
		+ "</table>"				
				+ "</div>"
				+ "</div>"		
		+ "</div>"
		+ "</div>"
		+ "</div>"		
		+ "<a href='index.php?page=dashboard3&id=" + feature.properties.IDKAB2 + "' class=\"list-group-item  list-group-item-success  test01\"><span class=\"glyphicon glyphicon-link\"></span> BUKA PETA "+ feature.properties.KABKOT +"</a>"				
		//+ "<a href='#' class=\"list-group-item  list-group-item-success  produk\"><span class=\"glyphicon glyphicon-link\"></span> BUKA PETA "+ feature.properties.KABKOT +"</a>"	
				+ "";				
				
				layer.bindPopup(popupText)
				map.getBounds(layer.getBounds());
				}
				
			});
		dataLayer.addTo(desa);
	}
	$.getJSON("../peta/kel.geojson", function(data) {addDataToMap2(data,desa); });	
	/////////////////////////// akhir layer desa //////////////////////////////////////////////////////////////////////////////////////		
	
	//var reklamexyz = L.marker([106.976342,-6.280231], {icon: IconIlok1});
	//var Imagery = L.esri.basemapLayer('Imagery');

	/*var mbAttr = 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';
	var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.satellite', attribution: mbAttr}),
		streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});
	*/
	/*
	var Streets = googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
		maxZoom: 20,
		subdomains:['mt0','mt1','mt2','mt3']
	});
	var Hybrid = googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
		maxZoom: 20,
		subdomains:['mt0','mt1','mt2','mt3']
	});
	var Sat = googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
		maxZoom: 20,
		subdomains:['mt0','mt1','mt2','mt3']
	});	  
	var Terrain = googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
		maxZoom: 20,
		subdomains:['mt0','mt1','mt2','mt3']
	});
	*/
	
 
	//var polaruang = L.esri.dynamicMapLayer('http://geospasial-sda.pu.kaltimprov.go.id:6080/arcgis/rest/services/TematikSimtaru/PolaRuangkaltim/MapServer/0/');
	//var polaruang = L.esri.basemapLayer('Topographic');
	var Topographic = L.esri.basemapLayer('Topographic');
	var Streets = L.esri.basemapLayer('Streets');
	var Imagery = L.esri.basemapLayer('Imagery');
	
	/*  
	var map = L.map('map',{
    fullscreenControl: {
        pseudoFullscreen: false
    },		
		center: [0.160116,116.470327],
		zoom: 7,
		layers: [Streets, ilok,titikapi,kec]
	});
	*/

    var map = L.map('map', {
    fullscreenControl: {
        pseudoFullscreen: false
    },			
        layers: [Imagery,jln,jln2,desa,kec,kab,reklame],
        //center: center,
		zoominfoControl: true,
		zoomControl: false,
		center: [-6.280231,106.975682],
        zoom: 13
    });	
//

// Shapefile control
L.control.shapefile({ position: 'topleft' }).addTo(map);
//
	var control = L.control.zoomBox({modal: true});
	map.addControl(control);
	/*
	var options = {
		modal: true,
		title: "Box area zoom"
	};
	var control = L.control.zoomBox(options);
	map.addControl(control);	
	*/
//
//////

/////
function getById(id) {
    return document.getElementById(id);
}

var mapcoords = getById("mapcoords");

map.on("click", function (event) {
    mapcoords.innerHTML = event.latlng.toString();
});
//
  //L.control.layers(layers).addTo(map);


        var featureGroup = L.featureGroup().addTo(map);

        var drawControl = new L.Control.Draw({
            edit: {
                featureGroup: featureGroup
            },
            draw: {
             //marker: false,
			 polyline: false,
			 rectangle: false,
			 circle: false,
			 circlemarker: false,		
                polygon : {
                    showArea:true,
					color: 'green'
                }
            }			
        }).addTo(map);
		

        map.on('draw:created', function(e) {

            // Each time a feaute is created, it's added to the over arching feature group
            featureGroup.addLayer(e.layer);
        });
//
	L.control.mousePosition().addTo(map);
	/*
	var baseLayers = {
		"Streets": Streets,
		"Satellite": Sat,
		"Hybrid": Hybrid,
		"Terrain": Terrain
	};

	var overlays = {
		"Bidang": bid,
		"Koordinat Ilok": ilok,
		"Koordinat Api": titikapi,
		"Batas Provinsi": kec
	};
	*/
        var baseTree = [
			{label: ' Esri Topographic ', layer: Topographic, name: 'Esri Topographic'},
			{label: ' Esri Streets ', layer: Streets, name: 'Esri Streets'},
			{label: ' Esri Imagery ', layer: Imagery, name: 'Layer Data Spatial'},
        ];

        var overlaysTree = {
            label: 'LAYER PAJAK REKLAME',
            children: [
				//{label: '<div id="onlysel"><b>IZIN LOKASI</b></div>'},
                {label: 'IZIN REKLAME', children: [
                    {label: 'Status Reklame', children: [
                        {label: ' Infrastruktur', layer: reklame},		
                        {label: ' Reklame Aktif', layer: fasum},			
                        {label: ' Reklame Expired', layer: reklame},			
                        {label: ' Illegal', layer: reklame},						
                    ]},
                    {label: 'Grade Lokasi Jalan', children: [
                        {label: ' Kelas I', layer: jln},		
                        {label: ' Kelas II', layer: jln2},			
                        {label: ' Kelas III', layer: jln3},			
                        {label: ' Kawasan Khusus', layer: reklame},						
                    ]},
                ]},					
                //{label: '<div id="onlysel"><b>LAYER TEMATIK</b></div>'},
                {label: 'ANDROID SURVEY', children: [
                    {label: ' Infrastruktur ', layer: reklame},
                    {label: ' Konten ', layer: reklame},								
                ]},
                {label: 'BATAS ADMINISTRASI', children: [
                    //{label: ' Provinsi', layer: kec},
                    {label: ' Kabupaten / Kota', layer: kab},
                    {label: ' Kecamatan', layer: kec},
                    {label: ' Desa / Kelurahan', layer: desa},					
                ]},				

            ]
        }


        var lay = L.control.layers.tree(baseTree, overlaysTree,
            {
                namedToggle: true,
                selectorBack: false,
                closedSymbol: '&#8862; &#x1f5c0;',
                openedSymbol: '&#8863; &#x1f5c1;',
                collapseAll: 'Tutup Semua',
                expandAll: 'Tampilkan Semua',
            });

        lay.addTo(map).collapseTree().expandSelected().collapseTree(true);
        L.DomEvent.on(L.DomUtil.get('onlysel'), 'click', function() {
            lay.collapseTree(true).expandSelected(true);
        });	
		
	
	//L.control.layers(baseLayers, overlays).addTo(map);
	L.Control.boxzoom({ position:'topright' }).addTo(map);

	

	

	
	
	// get color depending on population density value
	function getColor(d) {
		return d > 1000 ? '#800026' :
				d > 500  ? '#BD0026' :
				d > 200  ? '#E31A1C' :
				d > 100  ? '#FC4E2A' :
				d > 50   ? '#FD8D3C' :
				d > 20   ? '#FEB24C' :
				d > 10   ? '#FED976' :
							'#FFEDA0';
	}	
	
	var legend = L.control({position: 'bottomleft'});

	legend.onAdd = function (map) {

		var div = L.DomUtil.create('div', 'info legend'),
			//grades = [0, 10, 20, 50, 100, 200, 500, 1000],
			//labels = [];
			//grades = ["Titik Leger", "Ruas Jalan", "Jembatan", "Asset"],
			//labels = ["icons/Chartreuse.png","icons/Azure.png","icons/pink.png","icons/Inside-Pink.png"];
			grades = ["Kordinat Awal Ruas","Kordinat Akhir Ruas"],
			labels = ["icons/Chartreuse.png","icons/pink.png"];

		// loop through our density intervals and generate a label with a colored square for each interval
		for (var i = 0; i < grades.length; i++) {
			div.innerHTML +=
				//'<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
				//grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
				//grades[i] + (" <img src="+ labels[i] +" height='36' width='36'>") +'<br>';
				(" <img src="+ labels[i] +" height='18' width='18'> ") + grades[i] +'<br>';
		}

		return div;
	};

	legend.addTo(map);


    new L.Control.BootstrapModal({
        modalId: 'modal_help',
        tooltip: "How to use this thing",
        glyph: 'question-sign'
    }).addTo(map);
    new L.Control.BootstrapModal({
        modalId: 'modal_about',
        tooltip: "What is it?",
        glyph: 'info-sign'
    }).addTo(map);


</script>
</body>
</html>