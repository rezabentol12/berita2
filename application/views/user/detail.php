   <style type="text/css">

 </style>
 <div class="container-fluid " style="background-color:#EEECEE">
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


<div class="container-fluid mt-3 ">

  <div class="row justify-content-center">

    <div class="col-lg-6">
      <div class="card shadow mb-4">

        <div class="card-body">
          <?php foreach ($vertical->result() as $key) { ?>
           <h1 class="text-center" style="color:  #0E4375;"><?php echo $key->judul ?></h1>
           <h2 class="text-center" style="color: black;"><?php echo $key->nama_uploder ?></h2>
           <h3 class="text-center"><?php echo $key->tgl_upload ?></h2>
             <div class="text-center"><img src="<?php echo base_url() ?>assets/img/<?php echo $key->foto ?> "></div>
             <div style="text-align: justify;"><p><?php echo $key->descripsi ?></p></div>
           <?php } ?>
         </div>
       </div>
       <div class="card">
        <div class="card-body">
          <form action="<?php echo site_url('user/User/komentar/') ?>" method="POST">
            <div class="form-group">
              <?php foreach ($vertical->result() as $key) {?>
                <input type="hidden" name="id" value="<?php echo $key->id ?>"> 
              <?php } ?>
              <h3 class="text-center">kolom komentar</h3>
              <textarea class="form-control" placeholder="komentar" name="komentar"></textarea>
              <button class="btn btn-primary btn-sm mt-2">komentar</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <div class="col-lg-4">

      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary text-center" style="color:  #0E4375;">Berita Terbaru</h6>
        </div>
        <div class="card-body"  style="background-color:#EEECEE">
          <?php foreach ($terbaru->result() as $kay ) {
            ?>
            <div class="card mx-auto shadow" style="width: 15rem; ">
              <img src="<?php echo base_url() ?>assets/img/<?php echo $kay->foto ?>" class="card-img-top" height="200px;" width="90px;">
              <div class="card-body">
                <a href="<?php echo site_url("user/User/detail/$kay->id") ?>" style="color:black;"><p><?php echo $kay->judul ?></p></a>
              </div>
            </div>
          <?php   } ?>

          <?php foreach ($terbaru_n->result() as $kuy) {
            ?>
            <div class="card shadow mt-3">
              <div class="card-body"> 

               <div class="row">
                 <div class="col-md-4">
                  <div>
                   <img src="<?php echo base_url(); ?>assets/img/<?php echo $kuy->foto ?>" class="card-img-top" height="90px" width="90px">
                 </div>
               </div>
               <div class="col-md-4"> 
                 <a href="<?php echo site_url("user/User/detail/$kuy->id") ?>" style="color:black;"><p><?php echo $kuy->judul ?></p></a>        
               </div>
             </div>
           </div>
         </div>

       <?php } ?>
     </div>
   </div>


   <div class="card shadow mb-4">
    <div class="card-header py-3"  style="background-color: #0E4375">
      <h6 class="m-0 font-weight-bold text-white text-center">Tepopuler</h6>
    </div>
    <div class="card-body ">
      <?php $no=1; foreach ($hits->result() as $key ) {
        ?>
        <table>
         <tr> 
          <td > <a href="#"style="color:#0E4375; font-size: 25px;">#<?php  echo $key->judul;  ?></a></td>

        </tr>
      </table>
      <?php $no++;  } ?>
    </div>

  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold  text-center" style="color:  #0E4375;">Komentar</h6>
    </div>
    <div class="card-body ">
      <?php $no=1; foreach ($muncul->result() as $key ) {
        ?>
        <table>
         <tr> 
          <td > <a href="#"style="color:#0E4375; font-size: 25px;"><?php  echo $key->komentar;  ?></a></td>
          
        </tr>
      </table>
      <?php $no++;  } ?>
    </div>

  </div>

</div>
</div>
<!-- 
public function komentar($masuk)
{
   return $this->db->insert('komentar',$masuk);
}
-->










<!-- End of Main Content -->


