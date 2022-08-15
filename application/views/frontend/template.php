<?php $this->load->view('frontend/partials/header'); ?>
<body> 
    <?php $this->load->view('frontend/partials/navbar'); ?>

    <!-- Start Content -->
    <?= @$content; ?>
    <!-- End Content -->

    <?php $this->load->view('frontend/partials/footer'); ?>
    <?php $this->load->view('frontend/modal_bayar_zis'); ?>
   
    <?php $this->load->view('frontend/partials/scripts'); ?>
</body>
</html>
<?php die;?>