
<div class="form-grup">
<label for="">Latitude : </label>
<input type="text" class="form-control" id="Latitude">
</div>
<div class="form-grup">
<label for="">Longitude : </label>
<input type="text" class="form-control" id="Longitude">
</div>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div id="mapid" style="width: 100%; height: 500px;"></div>

<script>
var curlocation = [0,0];
if(curlocation[0]==0 && curlocation[1]==0){
    curlocation = [-6.75347, 111.03999]
}

    var map = L.map('mapid').setView([-6.75347, 111.03999], 15);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
    }).addTo(map);
    
    map.attributionControl.setPrefix(false);
    var marker = new L.marker(curlocation,{
        draggable:'true'
    });

    marker.on('dragend', function(event){
        var position = marker.getLatLng();
        marker.setLatLng(position).update();
        $("#Latitude").val(position.lat);
        $("#Longitude").val(position.lng).keyup;
    });

    $("#Latitude, #Longitude").change(function(){
        var position = [parseInt( $("#Latitude").val()), parseInt( $("#Longitude").val())];
        marker.setLatLng(position,{
            draggable:'true'
        }).bindPopup(position).update();
        map.panTo(position);
    });
    map.addLayer(marker);

</script>

</div>
</div>

<button class="btn btn-sm btn-success" onclick="add_book()"><i class="glyphicon glyphicon-plus"></i></button>

<table id="example1" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lokasi</th>
                    <th>Alamat</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data_olah as $olah)
                ?>
                <tr>
                    <td><?php echo $olah->id;?></td>
                    <td><?php echo $olah->nama;?></td>
                    <td><?php echo $olah->alamat;?></td>
                    <td><?php echo $olah->mall_lat;?></td>
                    <td><?php echo $olah->mall_long;?></td>
                    <td style="text-align: center">
                        <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $olah->id?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                        <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $olah->id?>)"><i class="glyphicon glyphicon-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    
    
    <script>
    $(document).ready(function(){
        $('#example1').DataTable();
    });
    </script>