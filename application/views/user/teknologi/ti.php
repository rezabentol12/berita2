   <div class="container-fluid">
   	<div class="row">
   		<div class="col-lg-12 mb-4 mt-4 px-4">
   			<div class="row -flex flex-row">
   				<?php foreach ($tampil->result() as $key) {?>
   					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 px-2 mb-3">
   						<div class=" card shadow ">
   							<img src="<?php echo base_url(); ?>assets/img/<?php echo $key->foto  ?>" class="card-img-top" height="250px" width="100px">
   							<div class="card-body">
   								<a href="<?php echo site_url("user/User/detail/$key->id") ?>" style="color:black;"><p><?php echo $key->judul?></p></a>
   							</div>
   						</div>
   					</div>
   				<?php } ?>
   			</div>
   		</div>
   	</div>


     <?php foreach ($vertical->result() as $kuy) {?>
      <div class="col-md-6 mt-3">
        <div class="card shadow">
         <h2 class="text-center"><?php echo $kuy->judul ?></h2>
         <div class="row">
            <div class="col-md-6">
               <div>
                  <a href="<?php echo site_url("user/User/detail/$kuy->id") ?>" style="color:black;"><p><?php echo substr($kuy->descripsi, 0, 380) ?></p></a>
               </div>
            </div>
            <div class="col-md-6"> 
               <img src="<?php echo base_url(); ?>assets/img/<?php echo $kuy->foto ?>" class="card-img-top" height="250px" width="100px">         
            </div>
         </div>
      </div>
   </div>

<?php } ?> 
</div>