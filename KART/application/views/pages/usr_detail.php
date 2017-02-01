<head>
    <title><?= $title;?></title>
    <link href="<?= base_url();?>assets/css/lightbox.css" rel="stylesheet"> 
    <link href="<?= base_url();?>assets/css/animate.min.css" rel="stylesheet">
</head><!--/head-->

<body>

    <div class="col-sm-6 col-sm-offset-6 col-md-6 col-md-offset-1 main">
    <section id="members" class="pengurus">
        <h2 class="sub-header">Total User =  </h2>        
        <form>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
              </thead>

              <tbody>
                <tr>
                  <th><b>Members of K-Art</b></th>
                  <th><b>Username</b></th>
                </tr>
                <tr>
                <?php foreach($users as $user){
                ?>
                </tr>
              <form action="<?= base_url('member/submit');?>" method="post" novalidate>
                <tr>
                  <td>
                    <?= $user['nim'] ?>
                  </td>
                  <td>
                  <a href="<?=base_url()."user_list/".$user['username']?>"><?= $user['username'] ?></a>
                  </td>
                </tr>
              </form>
              </tbody>
              <?php }?>
            </table>
            <hr>
          </div> <!--END DIV TABLE RESPONSIVE-->
        </form>
    </div>   <!-- END DIV CONTROL GROUP -->
  </form>    <!-- END FORM -->

  </section> <!-- END SECTION PENGURUS -->
</div>       <!-- END DIV -->

