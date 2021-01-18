<!-- <div class="agileits-services py-lg-5"> -->
		<!-- <div class="container py-5">
            <div class="title-section pb-sm-5 pb-3">
               <h2 class="heading-agileinfo text-center pb-4">Our <span> Services</span></h2>
            </div>
            <div class="agileits-services-row row text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="agileits-services-grids">
                       <span class="fa fa-globe"></span>
                        <h4>Online Courses
                        </h4>
                        <label></label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur. </p>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="agileits-services-grids mt-lg-0 mt-md-0 mt-5">
                       <span class="fa fa-book"></span>
                        <h4>Digital Library
                        </h4>
                        <label></label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur. </p>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="agileits-services-grids mt-lg-0 mt-5">
                        <span class="fa fa-cog"></span>
                        <h4>Mission
                        </h4>
                        <label></label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur.</p>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  mt-lg-0 mt-5">
                    <div class="agileits-services-grids">
                       <span class="fa fa-bus"></span>
                        <h4>Vission
                        </h4>
                        <label></label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur.</p>
                        
                    </div>
                </div>
            </div>
        </div> -->
    <!-- </div> -->
      <!-- promotions -->
	<section class="wthree-row w3-about py-lg-5">
		<div class="container py-5">
            <div class="title-section pb-sm-5 pb-3">
               <h3 class="heading-agileinfo text-center pb-4">Nossos <span> Cursos</span></h3>
            </div>
            
            
                <div class="row">

                    <?php $q=1; foreach($cursos as $item):?>
                        <div class="wpb_wrapper col-sm-6" style="margin-bottom: 50px;">
                            <div class="thim-widget-heading">
                                <div class="sc_heading   ">
                                    <h3 class="" style="color: #3ee3e4;"><span><?php echo $item['title'];?></span></h3>
                                </div>
                            </div>
                            <div class="wpb_single_image wpb_content_element vc_align_left">
                                
                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey">
                                        <img width="986" height="448" src="<?php echo BASE_URL;?>assets/images/<?php echo $item['img'];?>" style="width: 100%;">
                                    </div>
                                </figure>
                            </div>

                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <p><?php echo $item['desc'];?></p>

                                </div>
                            </div>

                            <div class="wpb_text_column wpb_content_element " style="margin-top: 10px;">
                                <div class="wpb_wrapper">
                                    <p><strong>Duração</strong>: <?php echo $item['duration'];?> anos<br>
                                    <strong>Modalidade</strong>: <?php echo $item['modality'];?><br>
                                    <strong>Turno</strong>: <?php echo $item['shift'];?><br>
                                    <strong>Formação</strong>: <?php echo $item['formation'];?><br>
                                    <strong>Regime</strong>: <?php echo $item['regime'];?><br>
                                    <strong>Mensalidade</strong>: <?php echo $item['Monthly'];?><br>
                                    <strong>Horário das Aulas</strong>: <?php echo $item['schedule'];?></p>
                                </div>
                            </div>
                        </div>
                        
                    <?php $q++; endforeach;?>
                </div>


            </div>
        </section>
<!-- //promotions -->