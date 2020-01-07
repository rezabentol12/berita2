   <div class="container-fluid">
    <div class="row">
     <div > <?php echo $this->session->flashdata('pesan') ?></div>
     <div class="col-lg-12 mb-4 mt-4 px-4">
      <div class="row -flex flex-row">
       <?php foreach ($tampil->result() as $key) {?>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 px-2 mb-3">
         <div class=" card shadow ">
          <img src="<?php echo base_url(); ?>assets/img/<?php echo $key->foto ?>" class="card-img-top" height="250px" width="100px">
          <div class="card-body">
           <a href="<?php echo site_url("user/User/detail/$key->id") ?>"><p class="card-text"><?php echo $key->judul?></p></a>
         </div>
       </div>
     </div>
   <?php } ?>
 </div>
</div>
</div>
</div>
<div id="wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Circle Buttons</h6>
          </div>
          <div class="card-body">
           <?php foreach ($vertical->result() as $kuy) {?>
            <div class="card shadow mt-3">
             <h2 class="text-center"><?php echo $kuy->judul ?></h2>
             <div class="row">
               <div class="col-md-6">
                <div>
                 <a href="<?php echo site_url("user/User/detail/$kuy->id") ?>" style="color:black;"><p><?php echo substr($kuy->descripsi, 0, 200) ?></p></a>
               </div>
             </div>
             <div class="col-md-6"> 
               <img src="<?php echo base_url(); ?>assets/img/<?php echo $kuy->foto ?>" class="card-img-top" height="180px" width="90px">         
             </div>
           </div>
         </div>
       <?php } ?> 
     </div>
   </div>
 </div>
 <div class="col-lg-4">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Split Buttons with Icon</h6>
    </div>
    <div class="card-body">
      <?php $no=1; foreach ($hits->result() as $key ) {
        ?>
        <table>
         <tr> 
          <td > <a href="#"><?php   echo $no ?></a></td>
          <td > <a href="#" class="btn btn-primary"><?php   echo $key->judul ?></a></td>
        </tr>
      </table>
      <?php $no++;  } ?>
    </div>
  </div>
</div>
</div>
</div>
</div>



