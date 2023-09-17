<?php /* Template Name: Home Page Template */ ?>
<?php
    get_header();
?>
  
  <?php
    $banner = get_field('banner');
  ?>
  <section class="hero lg:mt-[26px] mt-5 lg:pb-[128px] pb-5">
    <div class="max-w-[1280px] mx-auto flex items-center flex-wrap md:px-5 px-[15px]">
      <div class="lg:w-2/4 w-full lg:pt-5 xl:pr-[93px] lg:pr-[50px]">
        <h1
          class="xl:text-[50px] lg:text-[42px] md:text-[32px] text-[28px] font-plus-jakarta text-d-black font-bold xl:leading-[65px] lg:leading-[52px] md:leading-[42px] sm:leading-[32px] leading-10 lg:mb-[145px] mb-5">
          <?php echo $banner['title']; ?>
        </h1>
        <p class="text-base font-inter font-normal text-d-black mb-[29px]">
          <?php echo $banner['description']; ?>  
        </p>
        <div class="hero-btm flex items-center sm:flex-nowrap flex-wrap">
          <a href="<?php echo $banner['button_link']; ?> "
            class="inline-flex hover:bg-purple hover:text-white bg-sky-blue rounded-[7px] text-base font-inter font-medium text-d-black xl:px-[25px] lg:px-4 px-[25px] py-2">
            <?php echo $banner['button_text']; ?>
          </a>
          <div class="hero-list xl:ml-10 sm:ml-[11px] sm:mt-0 mt-5">
            <ul class="flex items-center">
              <li class="font-inter text-d-black text-[13px] font-normal leading-[20px] mr-[14px]">
                <?php echo $banner['payment_title']; ?>
              </li>
              <?php if( have_rows('banner') ): while ( have_rows('banner') ) : the_row(); ?>
                <?php if( have_rows('payment_icons') ): while ( have_rows('payment_icons') ) : the_row(); ?>
                  <li class="mr-[5px]"><a href="<?php the_sub_field('link'); ?>"><img src="<?php the_sub_field('icon'); ?>" alt="payment icon"></a></li>
                <?php endwhile; endif; ?>
              <?php endwhile; endif; ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="lg:w-2/4 w-full">
        <div class="image-holder relative lg:mt-0 mt-[50px]">
          <div
            class="relative lg:max-w-[545px] max-w-full w-full ml-auto  after:content='' after:absolute after:bg-[url('../images/gradient.svg')] after:bg-no-repeat after:bg-cover after:bg-center after:w-full after:h-full lg:after:-top-4 md:after:top-[-15px] after:top-[-5px] lg:after:-right-4 md:after:right-[-15px] after:right-[-5px] after:z-[1] after:rounded-[7px]">
            <img src="<?php echo $banner['main_image']; ?>" alt="" class="relative z-10 w-full ml-auto">
          </div>
          <img src="<?php echo $banner['wallet_image']; ?>" alt="" class="absolute top-[127px] -right-7 z-10 lg:block hidden">
          <img src="<?php echo $banner['text_image']; ?>" alt=""
            class="absolute bottom-[-53px] xl:left-5 -left-5 z-10 lg:block hidden">
        </div>
      </div>
    </div>
  </section>
  <!-- hero end  -->
  <!-- slider start  -->
  <section class="slider-sec lg:pb-[50px] lg:pt-0 py-[27px]">
    <div class="slider max-w-[1300px] lg:px-[30px] md:px-5 px-[15px] mx-auto">
      <div class="slide-track">
        <?php if( have_rows('banner_slider') ): while ( have_rows('banner_slider') ) : the_row(); ?>
          <div class="slide">
            <img src="<?php the_sub_field('slide_image'); ?>" height="70" width="181" alt="" />
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
  <!-- slider end  -->
  <!-- privacy start  -->
  <?php
    $privacy = get_field('privacy');
  ?>
  <section class="privacy lg:pb-[105px] md:pb-20 sm:pb-[70px] pb-[60px]">
    <div class="max-w-[1300px] lg:px-[30px] md:px-5 px-[15px] mx-auto text-center">
      <h2
        class="xl:mb-[97px] mb-10 font-plus-jakarta xl:text-[42px] lg:text-[32px]  text-3xl text-d-black font-bold lg:leading-[54px] sm:leading-[40px] leading-10 max-w-[700px] mx-auto">
        <?php echo $privacy['title']; ?>
      </h2>
      <div class="lg:grid lg:grid-cols-3 lg:space-x-12">
        <?php if( have_rows('privacy') ): while ( have_rows('privacy') ) : the_row(); ?>
          <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row(); ?>
            <div class="box bg-bg-cards xl:p-[50px] p-5 rounded-[10px] lg:mb-0 mb-[30px]">
              <div class="image-holder xl:mb-20 mb-10">
                  <img src="<?php the_sub_field('icon'); ?>" alt="" class="mx-auto">
              </div>
              <div class="text-box">
                  <h3 class="text-2xl font-bold font-plus-jakarta text-d-black mb-[9px]">
                    <?php the_sub_field('title'); ?>
                  </h3>
                  <p
                    class="text-base font-inter text-d-black font-normal lg:max-w-[275px] max-w-full mx-auto">
                    <?php the_sub_field('description'); ?>
                  </p>
              </div>
            </div>
          <?php endwhile; endif; ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
  <!-- privacy end  -->
  <!-- infrastructure start  -->
  <?php
    $infrastructure = get_field('infrastructure');
  ?>
  <section class="infrastructure xl:pb-[154px] lg:pb-[100px] md:pb-20 sm:pb-[70px] pb-[60px]">
    <div class="max-w-[1300px] lg:px-[30px] md:px-5 px-[15px] mx-auto flex flex-wrap items-center">
      <div class="lg:w-2/4 w-full xl:pr-[87px] pr-[26px]">
        <h2
          class="font-plus-jakarta xl:text-[42px] lg:text-[32px] text-3xl text-d-black font-bold xl:leading-[54px] lg-leading-[32px] sm:leading-[42px] leading-10 mb-[9px]">
          <?php echo $infrastructure['title']; ?>
        </h2>
        <p class="text-d-black font-inter text-base font-normal mb-[38px]">
          <?php echo $infrastructure['description']; ?>
        </p>
        <div class="flex items-center justify-start mb-[38px]">
          <div class="lg:mr-20 md:mr-[180px] sm:mr-20 mr-0">
            <h4 class="lg:text-4xl text-[34px] font-bold font-plus-jakarta text-d-black"><?php echo $infrastructure['response_time']; ?></h4>
            <p class="text-d-black font-inter text-base font-normal"><?php echo $infrastructure['response_time_description']; ?></p>
          </div>
          <div>
            <h4 class="lg:text-4xl text-[34px] font-bold font-plus-jakarta text-d-black"><?php echo $infrastructure['leads']; ?></h4>
            <p class="text-d-black font-inter text-base font-normal"><?php echo $infrastructure['leads_description']; ?></p>
          </div>
        </div>
        <div class="flex xl:flex-nowrap flex-wrap mb-3 items-center -space-x-5">
          <?php if( have_rows('infrastructure') ): while ( have_rows('infrastructure') ) : the_row(); ?>
            <?php if( have_rows('icons') ): while ( have_rows('icons') ) : the_row(); ?>
              <img class="w-[50px] h-[50px] border-2 border-white rounded-full dark:border-gray-800"
              src="<?php the_sub_field('icon'); ?>" alt="">
            <?php endwhile; endif; ?>
          <?php endwhile; endif; ?>
          <p
            class="font-inter text-dd-black font-medium text-base xl:!ml-[15px] lg:!ml-0 sm:!ml-[15px] !ml-0 xl:mt-0 lg:mt-5 sm:mt-0 mt-5 lg:w-full sm:w-auto w-full">
            <?php echo $infrastructure['icon_description']; ?>
          </p>
        </div>
      </div>
      <div class="lg:w-2/4  w-full">
        <div class="image-holder relative lg:mt-0 mt-10">
          <div
            class="relative xl:max-w-[545px] lg:max-w-[440px] max-w-full w-full ml-auto  after:content='' after:absolute after:bg-[url('../images/gradient.svg')] after:bg-no-repeat after:bg-cover after:bg-center after:w-full after:h-full g:after:-top-4 md:after:top-[-15px] after:top-[-5px] lg:after:-right-4 md:after:right-[-15px] after:right-[-5px] after:z-[1] after:rounded-[7px]">
            <img src="<?php echo $infrastructure['image_1']; ?>" alt="" class="relative w-full z-10 ml-auto">
          </div>
          <img src="<?php echo $infrastructure['image_2']; ?>" alt=""
            class="absolute lg:block hidden bottom-[-35px] left-[5px] z-10">
        </div>
      </div>
    </div>
  </section>
  <!-- infrastructure end  -->
  <!-- management start  -->
  <?php
    $management = get_field('management');
    $resource_management = $management['resource_management'];
    $task_assignments = $management['task_assignments'];
  ?>
  <section class="management mb-[30px]">
    <div class="max-w-[1300px] lg:px-[30px] md:px-5 px-[15px] mx-auto">
      <ul class="flex flex-wrap  xl:items-center -mx-[15px]">
        <li class="md:w-1/2 w-full px-[15px]">
          <div class="bg-bg-cards text-center lg:p-[50px] p-[30px] rounded-[7px] mr-0 md:mb-0 mb-[30px]">
            <h4
              class="lg:text-4xl md:text-[34px] sm:text-[32px] text-[28px] sm:!leading-[44px] !leading-9 font-bold font-plus-jakarta text-d-black mb-[10px]">
              <?php echo $resource_management['title']; ?>
            </h4>
            <p class="mb-[31px] font-inter text-d-black font-normal text-base">
              <?php echo $resource_management['description']; ?>
            </p>
            <a href="<?php echo $resource_management['button_link']; ?>"
              class="inline-flex hover:bg-purple hover:text-white bg-sky-blue rounded-[7px] text-base font-inter font-medium text-d-black px-[25px] py-2 sm:mb-20 mb-[50px]">
              <?php echo $resource_management['button_text']; ?>
            </a>
            <ul class="flex items-center flex-wrap -mx-2.5">
              <li class="sm:w-1/2 w-full px-2.5 sm:mb-0 mb-5"><img src="<?php echo $resource_management['image_1']; ?>" alt=""
                class="w-full">
              </li>
              <li class="sm:w-1/2 w-full px-2.5"><img src="<?php echo $resource_management['image_2']; ?>" alt="" class="w-full">
              </li>
            </ul>
          </div>
        </li>
        <li class="md:w-1/2 w-full px-[15px]">
          <div class="bg-bg-cards text-center h-full lg:p-[50px] p-[30px] rounded-[7px]">
            <h4
              class="lg:text-4xl md:text-[34px] sm:text-[32px] text-[28px] sm:!leading-[44px] !leading-9 font-bold font-plus-jakarta text-d-black mb-[10px]">
              <?php echo $task_assignments['title']; ?>
            </h4>
            <p class="mb-[31px] font-inter text-d-black font-normal text-base">
              <?php echo $task_assignments['description']; ?>
            </p>
            <a href="<?php echo $task_assignments['button_link']; ?>"
              class="inline-flex hover:bg-purple hover:text-white bg-sky-blue rounded-[7px] text-base font-inter font-medium text-d-black px-[25px] py-2 mb-9">
              <?php echo $task_assignments['button_text']; ?>
            </a>
            <div class="flex items-center justify-between">
              <img src="<?php echo $task_assignments['image']; ?>" alt="">
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- management end  -->
  <!-- reporting start  -->
  <?php
    $reporting = get_field('reporting');
  ?>
  <section class="reporting lg:pb-[105px] md:pb-20 sm:pb-[70px] pb-[60px]">
    <div class="max-w-[1300px] lg:px-[30px] md:px-5 px-[15px] mx-auto relative overflow-hidden">
      <div
        class="bg-dark-purple lg:p-[70px] md:p-[50px] p-[30px] overflow-hidden  relative rounded-[7px] after:content-['*'] after:absolute after:left-[-173px] after:rounded-[225px] after:bg-sky-blue after:blur-[25px] after:w-[400px] after:h-[500px] after:top-0 after:z-[1] after:opacity-60 before:content-['*'] before:w-[430px] before:h-[600px] before:rotate-[-40deg] before:absolute before:right-[150px] before:top-0 before:rounded-[257px] before:bg-sky-blue before:blur-[60px] before:opacity-60">
        <div class="max-w-[622px] relative z-10">
          <h2
            class="font-plus-jakarta lg:text-[42px] md:text-[38px] sm:text-4xl text-[28px] xl:max-w-full lg:max-w-[420px] max-w-full w-full text-white font-bold sm:leading-[54px] leading-9 mb-2.5">
            <?php echo $reporting['title']; ?>
          </h2>
          <p
            class="font-inter text-white font-normal text-base lg:mb-[89px] mb-[30px] xl:max-w-full lg:max-w-[470px] leading-5 max-w-full w-full">
            <?php echo $reporting['description']; ?>
          </p>
          <div class="flex flex-wrap items-center">
            <a href="<?php echo $reporting['button_link']; ?>"
              class="inline-flex hover:bg-purple hover:text-white bg-sky-blue rounded-[7px] text-base font-inter font-medium text-d-black px-[25px] py-2 mr-5">
              <?php echo $reporting['button_text']; ?>
            </a>
            <p class="font-inter text-white sm:mt-0 mt-4 text-[13px] font-normal leading-[20px]">
              <?php echo $reporting['unlimited']; ?>
            </p>
          </div>
        </div>
      </div>
      <img src="<?php echo $reporting['background_image']; ?>" alt=""
          class="absolute lg:block hidden xl:right-5 -right-16 xl:top-0 -top-2.5">
    </div>
  </section>
  <!-- reporting end  -->
  <!-- scalable start  -->
  <?php
    $scalable = get_field('scalable');
  ?>
  <section class="scalable lg:pb-[120px] sm:pb-[70px] pb-[60px]">
    <div class="max-w-[1300px] lg:px-[30px] md:px-5 px-[15px] mx-auto flex flex-wrap items-center">
      <div class="lg:w-2/4 w-full">
        <div class="image-holder relative">
          <div
            class="relative lg:max-w-[545px] max-w-full w-full mr-auto  after:content='' after:absolute after:bg-[url('../images/gradient.svg')] after:bg-no-repeat after:bg-cover after:bg-center after:w-full after:h-full md:after:-top-4 after:top-[-5px] md:after:-left-4 after:left-[-5px] after:z-[1] after:rounded-[7px]">
            <img src="<?php echo $scalable['main_image']; ?>" alt="" class="relative w-full z-10">
          </div>
          <img src="<?php echo $scalable['sub_image']; ?>" alt=""
            class="absolute lg:block hidden bottom-[-75px] xl:right-[30px] -right-5 z-10">
        </div>
      </div>
      <div class="lg:w-2/4 w-full">
        <div class="xl:ml-[95px] lg:ml-[50px] ml-0 lg:mt-0 mt-[50px]">
          <h2
            class="font-plus-jakarta xl:text-[42px] md:text-[32px] sm:text-4xl text-[30px] text-d-black font-bold xl:leading-[54px] lg:leading-[42px] leading-[49px] mb-[9px]">
            <?php echo $scalable['title']; ?>
          </h2>
          <p class="lg:mb-[98px] mb-10 font-inter text-d-black font-normal text-base">
            <?php echo $scalable['description']; ?>
          </p>
          <h4 class="lg:text-4xl text-[34px] font-bold font-plus-jakarta text-d-black mb-[10px]"><?php echo $scalable['number']; ?></h4>
          <p class="font-inter text-d-black font-normal text-base leading-5 mb-[29px]">
            <?php echo $scalable['number_description']; ?>
          </p>          
          <div class="flex sm:flex-nowrap flex-wrap items-center">
            <a href="<?php echo $scalable['button_link']; ?>"
              class="inline-flex hover:bg-purple hover:text-white bg-sky-blue rounded-[7px] text-base font-inter font-medium text-d-black px-[25px] py-2 mr-5">
              <?php echo $scalable['button_text']; ?>
            </a>
            <p
              class="font-inter sm:w-auto w-full sm:mt-0 mt-2 text-d-black text-[13px] font-normal leading-[20px]">
              <?php echo $scalable['concluded']; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- scalable end  -->
  <!-- reviews start  -->
  <section class="reviews lg:pb-[105px] md:pb-20 sm:pb-[70px] pb-[60px]">
    <div class="max-w-[1300px] lg:px-[30px] md:px-5 px-[15px] mx-auto">
      <ul class="flex flex-wrap mx-[-15px]">
        <?php if( have_rows('reviews') ): while ( have_rows('reviews') ) : the_row(); ?>
          <li class="lg:w-4/12 md:w-1/2 w-full px-[15px] lg:py-0 py-[15px]">
            <div class="reviews-box bg-bg-cards xl:p-10 p-5 rounded-[7px]">
              <ul class="flex items-center mb-[18px]">
                <li class="mr-[5px]"><img src="<?php the_sub_field('icon'); ?>" alt=""></li>
                <li class="mr-[5px]"><img src="<?php the_sub_field('icon'); ?>" alt=""></li>
                <li class="mr-[5px]"><img src="<?php the_sub_field('icon'); ?>" alt=""></li>
                <li class="mr-[5px]"><img src="<?php the_sub_field('icon'); ?>" alt=""></li>
                <li><img src="<?php the_sub_field('icon'); ?>" alt=""></li>
              </ul>
              <p
                class="font-inter text-d-black font-normal text-base mb-[29px] xl:min-h-auto min-h-[96px]">
                <?php the_sub_field('text'); ?>
              </p>
              <div class="flex items-center">
                <div class="image-holder xl:mr-[15px] mr-[10px]">
                  <img src="<?php the_sub_field('avatar'); ?>" width="50px" height="50px" alt="" class="rounded-[50%]">
                </div>
                <div class="text-box">
                  <h5 class="font-plus-jakarta text-lg text-d-black font-bold">
                    <?php the_sub_field('name'); ?>
                  </h5>
                  <p class="font-inter text-d-black font-normal xl:text-base text-sm">
                    <?php the_sub_field('role'); ?>
                  </p>
                </div>
              </div>
            </div>
          </li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
  </section>
  <!-- reviews end  -->
  <!-- faq start  -->
  <?php
    $faq = get_field('faq');
  ?>
  <section class="faq xl:pb-[120px] md:pb-20 sm:pb-[70px] pb-[60px]">
    <div class="max-w-[1300px] lg:px-[30px] md:px-5 px-[15px] mx-auto flex flex-wrap xl:items-center">
      <div class="xl:w-2/4 lg:w-3/5 w-full">
        <h2
          class="mb-[39px] font-plus-jakarta xl:text-[42px] lg:text-[32px] sm:text-3xl text-[28px] text-d-black font-bold xl:leading-[54px] lg:leading-[32px] sm:leading-[40px] leading-9">
          <?php echo $faq['title']; ?>
        </h2>

        <div id="accordion-collapse" data-accordion="collapse">
          <?php if( have_rows('faq') ): while ( have_rows('faq') ) : the_row(); ?>
            <?php if( have_rows('qa') ): while ( have_rows('qa') ) : the_row(); $count++; ?>
              <?php if( $count == 1 ): ?>
                
              <?php else: ?>

              <?php endif; ?>
              <div class="mb-[30px] border border-light-gray rounded-[7px]">
                <h2 id="accordion-collapse-heading-<?php echo $count; ?>">
                  <button type="button"
                    class="flex relative items-center justify-between w-full lg:p-5 p-[15px] pr-[50px]  text-left"
                    data-accordion-target="#accordion-collapse-body-<?php echo $count; ?>" aria-expanded="true"
                    aria-controls="accordion-collapse-body-1">
                    <span class="block sm:text-xl text-sm font-bold font-plus-jakarta text-d-black">
                      <?php the_sub_field('question'); ?>
                    </span>
                    <span
                      class="absolute right-5 top-1/2 -translate-y-1/2   transition-all duration-500 ease-in-out plus-icon">
                      <img src="<?php echo get_template_directory_uri()?>/assets/images/plus.svg" alt="" class=" w-[30px]" /></span>
                  </button>
                </h2>
                <div id="accordion-collapse-body-<?php echo $count; ?>" class="hidden"
                  aria-labelledby="accordion-collapse-heading-1">
                  <div class="lg:p-5 px-[15px] pb-[15px] pt-[5px]">
                    <p class="font-inter sm:text-base text-sm font-normal text-d-black">
                      <?php the_sub_field('answer'); ?>
                    </p>
                  </div>
                </div>
              </div>
              
            <?php endwhile; endif; ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="xl:w-2/4 lg:w-2/5 w-full">
          <div class="image-holder relative lg:mt-0 mt-[50px]">
              <div
                class="relative xl:max-w-[507px] lg:max-w-[369px] max-w-full w-full ml-auto  after:content='' after:absolute after:bg-[url('../images/gradient.svg')] after:bg-no-repeat after:bg-cover after:bg-center after:w-full after:h-full md:after:-top-4 after:top-[-5px] md:after:-right-4 after:right-[-5px] after:z-[1] after:rounded-[7px]">
                <img src="<?php echo $faq['image']; ?>" alt="" class="relative w-full z-10 ml-auto">
              </div>
          </div>
      </div>
    </div>
  </section>
  <!-- faq end  -->
  <?php
    $integration = get_field('integration');
  ?>
  <section class="reporting xl:pb-[120px] md:pb-20 sm:pb-[70px] pb-[60px]">
    <div class="max-w-[1300px] lg:px-[30px] md:px-5 px-[15px] mx-auto relative overflow-hidden">
      <div
        class="bg-d-black brans xl:p-[70px] lg:p-[50px] md:p-10 p-[30px] overflow-hidden  relative rounded-[7px] after:content-['*'] after:absolute after:left-[-60px] after:rounded-[180px] after:bg-sky-blue after:blur-[25px] after:w-[700px] after:h-[500px] after:top-[40px] after:z-[1] after:opacity-60 before:content-['*'] before:w-[500px] before:h-[500px] before:rotate-[-40deg] before:absolute before:right-[150px] before:top-[120px] before:rounded-[250px] before:bg-sky-blue before:blur-[60px] before:opacity-60">
        <div class="max-w-[622px] relative z-10">
          <h2
            class="lg:max-w-[452px] max-w-full font-plus-jakarta lg:text-[42px] md:text-[38px] sm:text-4xl text-[28px] text-white font-bold lg:leading-[54px] sm:leading-[49px] leading-9 md:pb-[149px] pb-2.5">
            <?php echo $integration['title']; ?>
          </h2>
          <div class="flex md:flex-nowrap flex-wrap items-center   md:mt-0 mt-5">
            <a href="<?php echo $integration['button_link']; ?>"
              class="inline-flex hover:bg-purple hover:text-white bg-sky-blue rounded-[7px] text-base font-inter font-medium text-d-black px-[25px] py-2 mr-5">
              <?php echo $integration['button_text']; ?>
            </a>
            <div class="flex sm:flex-nowrap flex-wrap items-center md:w-auto w-full   md:mt-0 mt-5">
              <ul class="flex items-center mr-[22px]">
                <li class="mr-[5px]"><img src="<?php echo $integration['icon']; ?>" alt=""></li>
                <li class="mr-[5px]"><img src="<?php echo $integration['icon']; ?>" alt=""></li>
                <li class="mr-[5px]"><img src="<?php echo $integration['icon']; ?>" alt=""></li>
                <li class="mr-[5px]"><img src="<?php echo $integration['icon']; ?>" alt=""></li>
                <li><img src="<?php echo $integration['icon']; ?>" alt=""></li>
              </ul>
              <p class="font-inter text-white text-base font-normal">
                <?php echo $integration['rated']; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <img src="<?php echo $integration['image']; ?>" alt="" class="absolute lg:block hidden right-5 top-0">
    </div>
  </section>
  <!-- =========== home-2-sec ============== -->
  <?php
    $embrace_innovation = get_field('embrace_innovation');
  ?>
  <section
    class="bg-[url('../images/hero-bg.png')] md:rounded-0 rounded-[7px] bg-cover bg-no-repeat bg-center md:mx-[30px] mx-5">
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
      <div class="flex flex-wrap md:-mx-2">
        <div class="md:w-1/2 xl:pl-[50px] lg:pt-[100px] pt-[70px] md:px-2">
          <ul class="flex items-center mb-[17px]">
            <li><span class="bg-pink-1000 block w-5 h-5 rounded-[3px]"></span></li>
            <li>
              <p class="font-inter ml-2.5 text-base text-white leading-[20.8px]">
                <?php echo $embrace_innovation['sub_title']; ?>
              </p>
            </li>
          </ul>
          <h2
            class="text-white font-plus-jakarta lg:leading-[65px] md:leading-10 leading-[42px] xl:text-[50px] lg:text-4xl md:text-[30px] text-[28px]  font-bold leading">
            <?php echo $embrace_innovation['title']; ?>
          </h2>
          <ul class="flex items-center lg:mt-[60px] mt-7">
            <li>
              <a href="<?php echo $embrace_innovation['button_1_link']; ?>"
                class="text-black-1000 block hover:bg-blue-1000 hover:text-white border border-transparent font-inter text-base font-medium leading-[130%] rounded-[7px] bg-pink-1000 py-[11px] px-6">
                <?php echo $embrace_innovation['button_1_text']; ?>
              </a>
            </li>
            <li class="ml-[15px]">
              <a href="<?php echo $embrace_innovation['button_2_link']; ?>"
                class="text-pink-1000 hover:text-black-1000 hover:bg-pink-1000 block border border-pink-1000 font-inter text-base font-medium leading-[130%] rounded-[7px] py-[11px] px-6">
                <?php echo $embrace_innovation['button_2_text']; ?>
              </a>
            </li>
          </ul>
        </div>
        <div class="md:w-1/2 md:px-2 md:mt-0 mt-[60px]">
          <img src="<?php echo $embrace_innovation['image']; ?>" alt="">
        </div>
      </div>
    </div>
  </section>
  
  <section class="xl:mt-[225px] mt-28">
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
      <div class="grid md:grid-cols-3 xl:gap-[50px] lg:gap-5 gap-2.5">
        <?php if( have_rows('features') ): while ( have_rows('features') ) : the_row(); ?>
          <div
            class="bg-gray-1000 rounded-[7px] md:mt-0 mt-[70px] text-center xl:px-10 lg:px-5 md:px-2.5 px-[30px] pb-12">
            <div
              class="bg-bg-clr mx-auto -mt-10 lg:w-20 md:w-16 w-20 rounded-full lg:h-20 md:h-16 h-20 flex items-center justify-center lg:text-[40px] md:text-[32px] text-[40px] font-inter text-white font-normal leading-[52%]">
              <?php the_sub_field('number'); ?>
            </div>
            <h3
              class="lg:text-2xl md:text-xl text-2xl lg:mt-20 mt-10 font-plus-jakarta font-bold text-black-1000 leading-[130%] mb-2.5">
              <?php the_sub_field('title'); ?>
            </h3>
            <p class="lg:text-base text-sm font-inter text-black-1000 leading-[130%]">
              <?php the_sub_field('description'); ?>
            </p>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>

  <?php
    $scalable_infrastructure = get_field('scalable_infrastructure');
  ?>
  <section class="lg:py-[120px] py-20">
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
      <div class="flex flex-wrap lg:-mx-2.5">
        <div class="lg:w-1/2 w-full lg:px-2.5">
          <h2
            class="xl:text-[42px] lg:text-[32px] sm:text-3xl text-[28px] font-plus-jakarta font-bold leading-[130%] mb-2.5">
            <?php echo $scalable_infrastructure['title']; ?>
          </h2>
          <p class="text-base font-inter text-black-1000 leading-[130%]">
            <?php echo $scalable_infrastructure['description']; ?>
          </p>
          <div class="grid grid-cols-2 sm:gap-[108px] gap-[30px] mt-[38px]">
            <div>
              <h3
                class="sm:text-4xl text-[30px] leading-[46.8px] text-black-1000 font-bold font-plus-jakarta ">
                <?php echo $scalable_infrastructure['response']; ?>
              </h3>
              <p class="text-base font-inter text-black-1000 leading-[130%]">
                <?php echo $scalable_infrastructure['response_text']; ?>
              </p>
            </div>
            <div>
              <h3
                class="sm:text-4xl text-[30px] leading-[46.8px] text-black-1000 font-bold font-plus-jakarta ">
                <?php echo $scalable_infrastructure['leads']; ?>
              </h3>
              <p class="text-base font-inter text-black-1000 leading-[130%]">
                <?php echo $scalable_infrastructure['leads_text']; ?>
              </p>
            </div>
          </div>
        </div>
        <div class="lg:w-2/4 w-full lg:px-2.5 lg:mt-0 mt-12">
          <div
            class="relative lg:max-w-[484px] w-full ml-auto  after:content-[''] after:absolute after:bg-[url('../images/gradient.svg')] after:bg-no-repeat after:bg-cover after:bg-center after:w-full after:h-full after:-top-4 after:-right-4 after:z-[1] after:rounded-[7px]">
            <img src="<?php echo $scalable_infrastructure['image_1']; ?>" alt="" class="relative z-10  w-full ml-auto">
            <img src="<?php echo $scalable_infrastructure['image_2']; ?>" alt=""
              class="absolute bottom-[-53px] lg:block hidden xl:left-[-42px] left-[-18px] z-10">
          </div>
        </div>
      </div>
    </div>
  </section>  
  
  <section class="">
    <?php $count =0; ?>
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
      <div
        class="md:flex grid sm:grid-cols-2 gap-[30px] items-center sm:p-[50px] p-[30px] bg-[url('../images/number-bg.png')] rounded-[7px] bg-cover bg-no-repeat ">
        <?php if( have_rows('number_banner') ): while ( have_rows('number_banner') ) : the_row(); $count++; ?>
          <div class="<?php echo ($count<4) ? "xl:mr-32 lg:mr-20 md:mr-10" : $count;?>">
            <h4
              class="text-white lg:text-4xl md:text-[34px] text-[32px] leading-[46.8px] font-plus-jakarta font-bold">
              <?php the_sub_field('number'); ?>
            </h4>
            <p class="text-base font-inter text-white leading-5 font-normal">
              <?php the_sub_field('description'); ?>
            </p>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>

  <?php
    $real_time_notifications = get_field('real-time_notifications');
  ?>
  <section class="xl:pt-[120px] pt-20 lg:pb-[105px] pb-20">
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
      <div class="flex flex-wrap">
        <div class="lg:w-1/2 w-full ">
            <img src="<?php echo $real_time_notifications['image']; ?>" class="w-full object-cover object-center h-full" alt="">
        </div>
        <div
          class="lg:w-1/2 w-full lg:bg-[url('../images/bg-gradient.png')] bg-blue-1000 xl:p-[50px] p-[30px] lg:mt-0 -mt-2.5 bg-no-repeat bg-cover">
          <h2
            class="text-white xl:text-[42px] lg:text-4xl sm:text-[38px] text-[34px] font-plus-jakarta font-bold sm:leading-[54.6px] leading-[1.3em]">
            <?php echo $real_time_notifications['title']; ?>
          </h2>
          <p class="text-white font-inter text-base font-normal leading-[20.8px] mt-2.5">
            <?php echo $real_time_notifications['description']; ?>
          </p>
          <ul class="mt-10 sm:mb-[60px] mb-5">
            <?php if( have_rows('real-time_notifications') ): while ( have_rows('real-time_notifications') ) : the_row(); ?>
              <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row(); ?>
                <li
                  class="text-white mb-5 font-inter text-base font-normal leading-[20.8px] flex items-center">
                  <span class="flex mr-2.5">
                    <img src="<?php the_sub_field('icon'); ?>" class="mr-2.5" alt="">
                  </span>
                  <?php the_sub_field('text'); ?>
                </li>
              <?php endwhile; endif; ?>
            <?php endwhile; endif; ?>
          </ul>
          <a href="<?php echo $real_time_notifications['button_link']; ?>"
            class="text-black-1000 inline-block hover:bg-blue-1000 hover:text-white border border-transparent font-inter text-base font-medium leading-[130%] rounded-[7px] bg-pink-1000 py-[11px] px-6">
            <?php echo $real_time_notifications['button_text']; ?>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php
    $customer_support_1 = get_field('customer_support_1');
  ?>
  <section class="xl:py-[120px] pb-20">
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
      <div class="flex flex-wrap">
        <div class="lg:w-1/2 w-full">
          <h2
            class="xl:text-[42px] lg:text-[32px] text-[28px] font-plus-jakarta font-bold leading-[130%] mb-2.5">
            <?php echo $customer_support_1['title']; ?>
          </h2>
          <p class="text-base font-inter text-black-1000 leading-[130%]">
            <?php echo $customer_support_1['description']; ?>
          </p>
          <ul class="mt-10 pl-4 list-disc">
            <?php if( have_rows('customer_support_1') ): while ( have_rows('customer_support_1') ) : the_row(); ?>
              <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row(); ?>
                <li>
                  <p class="text-base font-inter mb-2.5 text-black-1000 leading-[130%]">
                    <?php the_sub_field('text'); ?>
                  </p>
                </li>
              <?php endwhile; endif; ?>
            <?php endwhile; endif; ?>
          </ul>
          <a href="<?php echo $customer_support_1['button_link']; ?>"
            class="text-black-1000 mt-[53px] inline-block hover:bg-blue-1000 hover:text-white border border-transparent font-inter text-base font-medium leading-[130%] rounded-[7px] bg-pink-1000 py-[11px] px-6">
            <?php echo $customer_support_1['button_text']; ?>
          </a>
        </div>
        <div class="lg:w-2/4 w-full lg:mt-0 mt-12">
          <div
            class="relative xl:max-w-[497px] lg:max-w-[438px] max-w-full w-full ml-auto  after:content-['*'] after:absolute after:bg-[url('../images/gradient.svg')] after:bg-no-repeat after:bg-cover after:bg-center after:w-full after:h-full after:-top-4 after:-right-4 after:z-[1] after:rounded-[7px]">
            <img src="<?php echo $customer_support_1['image_1']; ?>" alt="" class="relative z-10 w-full">
            <img src="<?php echo $customer_support_1['image_2']; ?>" alt=""
              class="absolute bottom-[-53px] lg:block hidden xl:left-[-42px] left-[-18px] z-10">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="swiper-sec">
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
      <div class="bg-[url('../images/slider-bg.png')] lg:py-[100px] bg-cover py-20 bg-no-repeat bg-center">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <?php if( have_rows('review_slider') ): while ( have_rows('review_slider') ) : the_row(); ?>
              <div class="swiper-slide md:px-0 sm:px-[60px] px-[30px]">
                <div class="text-center">
                  <img src="<?php the_sub_field('icon'); ?>" alt="" class="inline-block">
                  <p
                    class="text-2xl mt-[30px] mb-[21px] font-inter leading-[31px] text-black-1000 xl:max-w-[981px] lg:max-w-[715px] max-w-[608px] mx-auto">
                    <?php the_sub_field('text'); ?>  
                  </p>
                  <img src="<?php the_sub_field('star'); ?> " alt="" class="inline-block">
                </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
          <div class="sm:block flex justify-center sm:mt-0 mt-10">
            <div class="swiper-button-next sm:right-5 sm:-mr-0 -mr-10 sm:absolute static"><img
              src="<?php echo get_template_directory_uri()?>/assets/images/right-arrow.svg" alt=""></div>
            <div
              class="swiper-button-prev sm:left-5 sm:-ml-0 -ml-10 sm:absolute static !after:content-['none']">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/left-icon.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recent Blog Section start -->
  <section class="xl:py-[120px] md:py-20 py-[60px]">
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
      <h4
        class="text-black-1000 mb-10 lg:text-[42px] sm:text-[38px] text-[34px] font-plus-jakarta font-bold leading-[]">
        Our
        recent blog</h4>
      <div class="grid md:grid-cols-3 gap-[30px]">
        <?php 
          $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 3, // Number of recent posts thumbnails to display
            'post_status' => 'publish' // Show only the published posts
          ));
          foreach( $recent_posts as $post_item ) : ?>
          <div>
            <?php
              $post_categories = wp_get_post_categories( $post_item['ID'], array( 'fields' => 'all' ) );
            ?>
            <a href="<?php echo get_permalink($post_item['ID']); ?>">
              <?php echo get_the_post_thumbnail($post_item['ID'], 'post-thumbnail', array( 'class' => 'w-full' )); ?>
              <div class="bg-gray-1000 p-5 rounded-bl-sm rounded-br-sm">
                <?php if (count($post_categories) > 0): ?>
                  <?php 
                    // $cat_link = get_site_url()."/".$post_categories[0]->slug;
                    $cat_name = $post_categories[0]->name;
                  ?>
                  <h6 class="text-black-1000 font-inter text-base mb-2.5 leading-[20.8px]">
                    <?php echo $cat_name; ?>
                  </h6>
                <?php endif; ?>
                <h4
                  class="xl:text-2xl md:text-xl text-2xl text-black-1000 font-bold mb-[30px] leading-[31.2px]">
                  <?php echo $post_item['post_title'] ?>  
                </h4>
                <div
                  class="text-base font-inter text-black-1000 flex items-center leading-5">
                  Read more
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/arrow.svg" class="ml-2.5" alt="">
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- Recent Blog Section end -->

  <!-- ============= home-3-sec ============= -->
  <?php
    $powerful_solutions = get_field('powerful_solutions');
  ?>
  <section>
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
      <div
        class="bg-[url('../images/solution-bg.png')] rounded-[7px] md:py-[150px] sm:p-[50px] p-[30px] bg-no-repeat bg-center">
        <div class="text-center">
          <h2
            class="text-white max-w-[940px] mx-auto font-plus-jakarta 3xl:text-[50px] sm:text-[40px] text-[38px] font-bold 3xl:leading-[65px] sm:leading-[55px] leading-[45px] mb-2.5">
            <?php echo $powerful_solutions['title']; ?>
          </h2>
          <p
            class="text-white mt-2.5 3xl:mb-12 sm:mb-10 mb-[50px] max-w-[682px] mx-auto font-inter text-base leading-[20.8px] font-normal">
            <?php echo $powerful_solutions['description']; ?>
          </p>

          <form>
            <div class="relative max-w-[470px] mx-auto">
              <input type="search" id="default-search"
                class="block w-full p-[18px] pl-[21px] focus:ring-0 text-base placeholder:text-black font-inter font-normal text-black border border-gray-1000 rounded-[7px] bg-white  "
                placeholder="Enter your email address" required>
              <button type="submit"
                class="text-black-1000 hover:bg-blue-1000 hover:text-white font-inter text-base font-medium leading-[20.8px] sm:mt-0 mt-5 sm:absolute right-2.5 bottom-2.5 bg-pink-1000 py-2.5 px-6 rounded-[7px]">Subscribe</button>
            </div>
          </form>
          <div class="sm:flex sm:text-start text-center items-center justify-center sm:mt-5 mt-[50px]">
            <ul class="flex sm:justify-start justify-center items-center mr-[22px]">
              <li class="mr-[5px]"><img src="<?php echo $powerful_solutions['star']; ?>" class="inline-block" alt=""></li>
              <li class="mr-[5px]"><img src="<?php echo $powerful_solutions['star']; ?>" class="inline-block" alt=""></li>
              <li class="mr-[5px]"><img src="<?php echo $powerful_solutions['star']; ?>" class="inline-block" alt=""></li>
              <li class="mr-[5px]"><img src="<?php echo $powerful_solutions['star']; ?>" class="inline-block" alt=""></li>
              <li><img src="<?php echo $powerful_solutions['star']; ?>" alt=""></li>
            </ul>
            <p class="font-Inter  text-white text-base font-normal">
              <?php echo $powerful_solutions['text']; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    $role_based_access = get_field('role-based_access');
    $role_left = $role_based_access['left_item'];
    $role_right = $role_based_access['right_item'];
  ?>
  <section class="3xl:pt-[100px] 3xl:pb-[120px] md:py-16 pt-[50px]">
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
      <div class="flex flex-wrap md:-mx-[15px]">
        <div class="md:w-1/2 w-full md:px-[15px]">
          <h2
            class="text-black-1000 font-plus-jakarta 3xl:text-[42px] sm:text-[32px] text-[34px] mb-2.5 font-bold sm:leading-[54px] leading-10">
            <?php echo $role_left['title']; ?>
          </h2>
          <p class="text-base text-black-1000 font-inter leading-[20.8px]">
            <?php echo $role_left['description']; ?>
          </p>
          <div
            class="bg-[url('../images/feature-box.png')] rounded-[7px] mb-[30px] 3xl:mt-10 mt-md-5 mt-10 sm:p-[50px] p-[30px] bg-no-repeat bg-center">
            <div class="text-center">
              <h2 class="md:text-4xl text-[34px] font-plus-jakarta text-white font-bold text-wite">
                <?php echo $role_left['sub_title']; ?>
              </h2>
              <img src="<?php echo $role_left['image_1']; ?>" alt="" class="inline-block mt-10">
            </div>
          </div>
          <div>
            <img src="<?php echo $role_left['image_2']; ?>" alt="">
          </div>
        </div>
        <div class="md:w-1/2 w-full md:px-[15px] md:mt-0 mt-[30px]">
          <div class="bg-gray-1000 rounded-[7px] 3xl:p-[50px] sm:p-10 p-[30px]">
            <h6 class="text-base font-inter text-black-1000 mb-2.5">
              <?php echo $role_right['sub_title']; ?>
            </h6>
            <h2 class="text-black-1000 font-plus-jakarta font-bold 3xl:text-[42px] text-[32px]">
              <?php echo $role_right['title']; ?>
            </h2>
            <div class="sm:mt-[199px] mt-[30px]">
              <a href="<?php echo $role_right['button_link']; ?>" alt=""
                class="text-black-1000 mb-1 hover:bg-blue-1000 hover:text-white font-inter text-base font-medium leading-[20.8px]  bg-pink-1000 py-2.5 px-6 rounded-[7px]">
                <?php echo $role_right['button_text']; ?>
              </a>
              <h6 class="text-base font-inter text-black-1000 mb-2.5">
                <?php echo $role_right['bottom_text']; ?>
              </h6>
            </div>
          </div>
          <div
            class="bg-[url('../images/feature-box-blur.png')] rounded-[7px] mb-[30px] mt-10 sm:p-[50px] p-[30px] bg-no-repeat bg-center">
            <div class="text-center">
              <h2 class="3xl:text-4xl text-[32px] font-plus-jakarta text-black font-bold text-wite">
                <?php echo $role_right['bottom_title']; ?>
              </h2>
              <img src="<?php echo $role_right['image']; ?>" alt="" class="inline-block mt-10">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    $secure_data = get_field('secure_data');
  ?>
  <section class="sm:mt-0 mt-[30px]">
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
      <div class="text-center">
        <h2
          class="3xl:text-[50px] md:text-[32px] sm:text-[40px] text-[38px] text-black-1000 font-bold 3xl:max-w-[671px] max-w-full 3xl:leading-[65px] sm:leading-[55px] leading-[45px] mx-auto font-plus-jakarta">
          <?php echo $secure_data['title']; ?>
        </h2>
      </div>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 lg:gap-[50px] gap-[30px] 3xl:mt-10 mt-5">
        <?php if( have_rows('secure_data') ): while ( have_rows('secure_data') ) : the_row(); ?>
          <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row(); ?>
            <div class="bg-gray-1000 xl:p-10 py-10 px-5 rounded-[7px]">
              <img src="<?php the_sub_field('icon'); ?>"
                alt="">
              <h4 class="sm:text-2xl text-[22px] mt-5 mb-2.5 font-plus-jakarta font-bold text-black-1000">
                <?php the_sub_field('title'); ?>
              </h4>
              <p class="text-base font-inter text-black-1000 leading-5">
                <?php the_sub_field('description'); ?>
              </p>
            </div>
          <?php endwhile; endif; ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
  
  <?php
    $customer_support_tabs = get_field('customer_support_tabs');
    $count = 0;
  ?>
  <section class="3xl:pt-[120px] pt-16">
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
      <div class="text-center 3xl:mb-10 md:mb-5 mb-10">
        <h2
          class="3xl:text-[42px] text-[32px] text-black-1000 font-bold 3xl:leading-[65px] md:leading-[55px] leading-[40px] mx-auto font-plus-jakarta">
          <?php echo $customer_support_tabs['title']; ?>
        </h2>
      </div>
      <div>
        <ul class="flex flex-wrap justify-center" id="myTab" data-tabs-toggle="#myTabContent"
          role="tablist">
          <?php if( have_rows('customer_support_tabs') ): while ( have_rows('customer_support_tabs') ) : the_row(); ?>
            <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row(); ?>
              <?php
                $tab = get_sub_field('tab');
                $tab_slug = str_replace(" ", "_", strtolower($tab));
              ?>
              <li class="md:mr-[30px] mr-[15px] lg:mb-0 mb-[15px]" role="presentation">
                <button
                  class="inline-block text-black-1100 text-base font-inter font-normal leading-[20.8px] py-2.5 bg-gray-100 px-[30px] rounded-[7px]"
                  id="<?php echo $tab_slug; ?>-tab" data-tabs-target="#<?php echo $tab_slug; ?>" type="button" role="tab"
                  aria-controls="<?php echo $tab; ?>" aria-selected="false"><?php echo $tab; ?></button>
              </li>
            <?php endwhile; endif; ?>
          <?php endwhile; endif; ?>
        </ul>
      </div>
      <div id="myTabContent">
        <?php if( have_rows('customer_support_tabs') ): while ( have_rows('customer_support_tabs') ) : the_row();?>
          <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row(); $count++; ?>
            <?php
              $tab = get_sub_field('tab');
              $tab_slug = str_replace(" ", "_", strtolower($tab));
            ?>
            <div class="hidden  dark:bg-gray-800" id="<?php echo $tab_slug; ?>" role="tabpanel" aria-labelledby="<?php echo $tab_slug; ?>-tab">
              <?php if($count % 2 == 1): ?>
                <div class="flex flex-wrap mt-12">
                  <div class="md:w-1/2 ">
                    <img src="<?php the_sub_field('image'); ?>" class="w-full object-cover object-center h-full" alt="">
                  </div>
                  <div
                    class="md:w-1/2 bg-[url('../images/shadow-1.png')] sm:p-[50px] p-[30px] bg-no-repeat bg-cover">

                    <p class="text-white font-inter text-base font-normal leading-[20.8px] ">
                      <?php the_sub_field('sub_title'); ?>
                    </p>
                    <h2
                      class="text-white 3xl:text-[42px] text-[32px] font-plus-jakarta font-bold 3xl:leading-[54.6px] leading-[45px] mt-2.5">
                      <?php the_sub_field('title'); ?>
                    </h2>
                    <div class="xl:mt-[199px] sm:mt-32 mt-[30px]">
                      <a href="<?php the_sub_field('button_link'); ?>"
                        class="text-black-1000 inline-block hover:bg-blue-1000 hover:text-white border border-transparent font-inter text-base font-medium leading-[130%] rounded-[7px] bg-pink-1000 py-[11px] px-6">
                        <?php the_sub_field('button_text'); ?>
                      </a>
                      <p class="text-white mt-2 font-inter text-base font-normal leading-[20.8px] ">
                        <?php the_sub_field('bottom_text'); ?>
                      </p>
                    </div>
                  </div>
                </div>
              <?php else: ?>
                <div class="flex flex-wrap mt-12">
                  <div
                    class="md:w-1/2 bg-[url('../images/shadow-1.png')] sm:p-[50px] p-[30px] bg-no-repeat bg-cover">
                    <p class="text-white font-inter text-base font-normal leading-[20.8px] ">
                      <?php the_sub_field('sub_title'); ?>
                    </p>
                    <h2
                      class="text-white 3xl:text-[42px] text-[32px] font-plus-jakarta font-bold 3xl:leading-[54.6px] leading-[45px] mt-2.5">
                      <?php the_sub_field('title'); ?>
                    </h2>
                    <div class="xl:mt-[199px] sm:mt-32 mt-[30px]">
                      <a href="<?php the_sub_field('button_link'); ?>"
                        class="text-black-1000 inline-block hover:bg-blue-1000 hover:text-white border border-transparent font-inter text-base font-medium leading-[130%] rounded-[7px] bg-pink-1000 py-[11px] px-6">
                        <?php the_sub_field('button_text'); ?>
                      </a>
                      <p class="text-white mt-2 font-inter text-base font-normal leading-[20.8px] ">
                        <?php the_sub_field('bottom_text'); ?>
                      </p>
                    </div>
                  </div>
                  <div class="md:w-1/2 ">
                    <img src="<?php the_sub_field('image'); ?>" class="w-full object-cover object-center h-full" alt="">
                  </div>
                </div>
              <?php endif; ?>
            </div>
          <?php endwhile; endif; ?>
        <?php endwhile; endif; ?>        
      </div>
    </div>
  </section>

  <?php
    $advanced_reporting = get_field('advanced_reporting');
    $count = 0;
  ?>
  <section class="3xl:py-[120px] py-16">
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
      <div class="flex flex-wrap items-center">
        <div class="lg:w-1/2 w-full">
          <h2
            class="3xl:text-[42px] text-[32px] font-plus-jakarta font-bold 3xl:leading-[130%] leading-[100%] mb-2.5">
            <?php echo $advanced_reporting['title']; ?>
          </h2>
          <p class="text-base font-inter text-black-1000 leading-[130%]">
            <?php echo $advanced_reporting['description']; ?>
          </p>
          <ul class="mt-10 mb-10">
            <?php if( have_rows('advanced_reporting') ): while ( have_rows('advanced_reporting') ) : the_row(); ?>
              <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row(); ?>
                <li
                  class="text-black-1000 mb-5 font-inter text-base font-normal leading-[20.8px] flex items-center">
                  <span class="flex mr-2.5">
                    <img src="<?php the_sub_field('icon'); ?>" class="mr-2.5" alt="">
                  </span>
                  <?php the_sub_field('text'); ?>
                </li>
              <?php endwhile; endif; ?>
            <?php endwhile; endif; ?>
          </ul>
          <a href="<?php echo $advanced_reporting['button_link']; ?>"
            class="text-black-1000 inline-block hover:bg-blue-1000 hover:text-white border border-transparent font-inter text-base font-medium leading-[130%] rounded-[7px] bg-pink-1000 py-[11px] px-6">
            <?php echo $advanced_reporting['button_text']; ?>
          </a>
        </div>
        <div class="lg:w-2/4 w-full lg:mt-0 mt-12">
          <div class="relative">
            <div
              class="relative xl:max-w-[504px] lg:max-w-[404px] w-full ml-auto  after:content-'' after:absolute after:bg-[url('../images/gradient.svg')] after:bg-no-repeat after:bg-cover after:bg-center after:w-full after:h-full md:after:-top-4 after:-top-2 md:after:-right-4 after:-right-2 after:z-[1] after:rounded-[7px]">
              <img src="<?php echo $advanced_reporting['image_1']; ?>" alt="" class="relative w-full z-10">
            </div>
            <img src="<?php echo $advanced_reporting['image_2']; ?>" alt=""
              class="absolute bottom-[-53px] lg:block hidden left-[33px] z-10">
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    $white_labeling = get_field('white-labeling');
  ?>
  <section class="3xl:py-[120px] md:py-16 pt-1 pb-[70px]">
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
        <div class="flex flex-wrap items-center">
          <div class="lg:w-2/4 w-full">
            <div class="relative">
              <div
                class="relative xl:max-w-[504px] lg:max-w-[404px] w-full after:content-'' after:absolute after:bg-[url('../images/gradient.svg')] after:bg-no-repeat after:bg-cover after:bg-center after:w-full after:h-full md:after:-top-4 after:-top-2 md:after:-left-4 after:-left-2 after:z-[1] after:rounded-[7px]">
                <img src="<?php echo $white_labeling['image_1']; ?>" alt="" class="relative z-10 w-full">
              </div>
              <img src="<?php echo $white_labeling['image_2']; ?>" alt=""
                  class="absolute lg:block hidden bottom-[-53px] right-[33px] z-10">
            </div>
          </div>
          <div class="lg:w-1/2 w-full lg:mt-0 mt-12">
            <div class="lg:max-w-[530px] ml-auto">
              <h2
                class="3xl:text-[42px] text-[32px] font-plus-jakarta font-bold 3xl:leading-[130%] leading-[100%] mb-2.5">
                <?php echo $white_labeling['title']; ?>
              </h2>
              <p class="text-base font-inter text-black-1000 leading-[130%]">
                <?php echo $white_labeling['description']; ?>
              </p>
              <div class="grid sm:grid-cols-2 sm:gap-[66px] gap-4 sm:mt-[38px] mt-[30px]">
                <?php if( have_rows('white-labeling') ): while ( have_rows('white-labeling') ) : the_row(); ?>
                  <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row(); ?>
                    <div>
                      <img src="<?php the_sub_field('icon'); ?>"
                        alt="">

                      <p class="text-base font-inter mt-4 text-black-1000 leading-[130%]">
                        <?php the_sub_field('text'); ?>
                      </p>
                    </div>
                  <?php endwhile; endif; ?>
                <?php endwhile; endif; ?>
              </div>
              <a href="<?php echo $white_labeling['button_link']; ?>"
                class="text-black-1000 mt-10 inline-block hover:bg-blue-1000 hover:text-white border border-transparent font-inter text-base font-medium leading-[130%] rounded-[7px] bg-pink-1000 py-[11px] px-6">
                <?php echo $white_labeling['button_text']; ?>
              </a>
            </div>
          </div>
        </div>
    </div>
  </section>

  <?php
    $flexible_plan_options = get_field('flexible_plan_options');
    $basic = $flexible_plan_options['basic'];
    $pro = $flexible_plan_options['pro'];
    $enterprise = $flexible_plan_options['enterprise'];
  ?>
  <section class="3xl:pb-[120px] pb-16 3xl:pt-0 md:pt-8">
    <div class="max-w-[1300px] md:px-[30px] px-[15px] mx-auto">
      <div class="text-center">
        <h2
          class="3xl:text-[42px] text-[32px] text-black-1000 3xl:mb-10 mb-5 font-bold max-w-[671px] 3xl:leading-[65px] leading-[55px] mx-auto font-plus-jakarta">
          <?php echo $flexible_plan_options['title']; ?>
        </h2>
      </div>
      <div class="grid lg:grid-cols-3 gap-[30px]">
        <div class="h-full bg-gray-1000">
          <div class="h-full">
            <div class="bg-card-bg rounded-tl-[7px] rounded-tr-[7px] py-[30px] text-center">
              <h4
                class="text-black-1000 mb-4 leading-[39px] sm:text-[30px] text-[26px] font-plus-jakarta font-bold">
                <?php echo $basic['title']; ?>
              </h4>
              <h3
                class="sm:text-4xl text-[30px] text-black-1000 font-plus-jakarta font-bold leading-[32px]">
                <?php echo $basic['price']; ?>
                <span class="text-base font-inter font-normal"> /
                  month</span>
              </h3>
            </div>
            <div class="bg-gray-1000 xl:p-10 p-5 lg:min-h-[330px] min-h-auto">
              <ul class="">
                <?php if( have_rows('flexible_plan_options') ): while ( have_rows('flexible_plan_options') ) : the_row(); ?>
                  <?php if( have_rows('basic') ): while ( have_rows('basic') ) : the_row(); ?>
                    <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row(); ?>
                      <li
                        class="text-black-1000 mb-2.5 font-inter text-base font-normal leading-[20.8px] flex items-center">
                        <span class="flex mr-2.5"><img src="<?php echo get_template_directory_uri()?>/assets/images/tick-icon.svg" class="mr-2.5"
                          alt=""></span>
                        <?php the_sub_field('text'); ?>
                      </li>
                    <?php endwhile; endif; ?>
                  <?php endwhile; endif; ?>
                <?php endwhile; endif; ?>
              </ul>
              <a href="<?php echo $basic['button_link']; ?>"
                class="text-black-1000 mt-[30px] inline-block hover:bg-blue-1000 hover:text-white border border-transparent font-inter text-base font-medium leading-[130%] rounded-[7px] bg-pink-1000 py-[11px] px-6">
                <?php echo $basic['button_text']; ?>
              </a>
            </div>
          </div>
        </div>
        <div class="h-full bg-gray-1000">
          <div class="h-full">
            <div class="bg-card-bg rounded-tl-[7px] rounded-tr-[7px] py-[30px] text-center">
              <h4
                class="text-black-1000 mb-4 leading-[39px] sm:text-[30px] text-[26px] font-plus-jakarta font-bold">
                <?php echo $pro['title']; ?>
              </h4>
              <h3
                class="sm:text-4xl text-[30px] text-black-1000 font-plus-jakarta font-bold leading-[32px]">
                <?php echo $pro['price']; ?>
                <span class="text-base font-inter font-normal"> /
                  month</span>
              </h3>
            </div>
            <div class="bg-gray-1000 xl:p-10 p-5 lg:min-h-[330px] min-h-auto">
              <ul class="">
                <?php if( have_rows('flexible_plan_options') ): while ( have_rows('flexible_plan_options') ) : the_row(); ?>
                  <?php if( have_rows('pro') ): while ( have_rows('pro') ) : the_row(); ?>
                    <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row(); ?>
                      <li
                        class="text-black-1000 mb-2.5 font-inter text-base font-normal leading-[20.8px] flex items-center">
                        <span class="flex mr-2.5"><img src="<?php echo get_template_directory_uri()?>/assets/images/tick-icon.svg" class="mr-2.5"
                          alt=""></span>
                        <?php the_sub_field('text'); ?>
                      </li>
                    <?php endwhile; endif; ?>
                  <?php endwhile; endif; ?>
                <?php endwhile; endif; ?>
              </ul>
              <a href="<?php echo $pro['button_link']; ?>"
                class="text-black-1000 mt-[30px] inline-block hover:bg-blue-1000 hover:text-white border border-transparent font-inter text-base font-medium leading-[130%] rounded-[7px] bg-pink-1000 py-[11px] px-6">
                <?php echo $pro['button_text']; ?>
              </a>
            </div>
          </div>
        </div>
        <div class="h-full bg-gray-1000">
          <div class="h-full">
            <div class="bg-card-bg rounded-tl-[7px] rounded-tr-[7px] py-[30px] text-center">
              <h4
                class="text-black-1000 mb-4 leading-[39px] sm:text-[30px] text-[26px] font-plus-jakarta font-bold">
                <?php echo $enterprise['title']; ?>
              </h4>
              <h3
                class="sm:text-4xl text-[30px] text-black-1000 font-plus-jakarta font-bold leading-[32px]">
                <?php echo $enterprise['price']; ?>
                <span class="text-base font-inter font-normal"> /
                  month</span>
              </h3>
            </div>
            <div class="bg-gray-1000 xl:p-10 p-5 lg:min-h-[330px] min-h-auto">
              <ul class="">
                <?php if( have_rows('flexible_plan_options') ): while ( have_rows('flexible_plan_options') ) : the_row(); ?>
                  <?php if( have_rows('enterprise') ): while ( have_rows('enterprise') ) : the_row(); ?>
                    <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row(); ?>
                      <li
                        class="text-black-1000 mb-2.5 font-inter text-base font-normal leading-[20.8px] flex items-center">
                        <span class="flex mr-2.5"><img src="<?php echo get_template_directory_uri()?>/assets/images/tick-icon.svg" class="mr-2.5"
                          alt=""></span>
                        <?php the_sub_field('text'); ?>
                      </li>
                    <?php endwhile; endif; ?>
                  <?php endwhile; endif; ?>
                <?php endwhile; endif; ?>
              </ul>
              <a href="<?php echo $enterprise['button_link']; ?>"
                class="text-black-1000 mt-[30px] inline-block hover:bg-blue-1000 hover:text-white border border-transparent font-inter text-base font-medium leading-[130%] rounded-[7px] bg-pink-1000 py-[11px] px-6">
                <?php echo $enterprise['button_text']; ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    $request = get_field('request');
    $count = 0;
  ?>
  <section class="pb-[120px]">
    <div class="max-w-[1170px] mx-auto lg:px-[30px] md:px-5 px-[15px]">
      <div class="text-center">
        <h2
          class="3xl:text-[50px] text-[32px] text-black-1000 font-bold 3xl:leading-[65px] md:leading-[55px] leading-[40px] mx-auto font-plus-jakarta">
          <?php echo $request['title']; ?>
        </h2>
        <p class="text-base font-inter text-black-1000 leading-[130%]">
          <?php echo $request['description']; ?>
        </p>
      </div>
      <div class="flex flex-wrap mt-12 ">
        <div
          class="md:w-1/2 w-full bg-[url('../images/contact-shadow.png')] sm:p-[50px] p-[30px] rounded-tr-[7px] rounded-br-[7px] bg-no-repeat bg-cover">
          <h4 class="text-2xl text-white font-plus-jakarta font-bold mb-10">Powering world-class companies
          </h4>
          <?php echo do_shortcode('[contact-form-7 id="d4a7c52" title="Powering world-class companies"]'); ?>
        </div>
        <div
          class="md:w-1/2 w-full bg-[url('../images/contact-bg.png')] flex items-center justify-center flex-col sm:p-[50px] p-[30px] bg-no-repeat bg-cover text-center">

          <p class="text-black-1000 font-inter text-xl font-normal leading-[1.3em] ">
            <?php echo $request['text']; ?>
          </p>
          <ul class="flex items-center justify-center mt-[30px]">
            <li>
              <img src="<?php echo $request['avatar']; ?>" class="rounded-full w-[50px] h-[50px]">
            </li>
            <li class="ml-4 text-start">
              <h6 class="text-lg font-plus-jakarta font-bold "><?php echo $request['name']; ?></h6>
              <p class="text-base font-inter text-black leading-[1.3em]"><?php echo $request['role']; ?></p>
            </li>
          </ul>
          <h6 class="text-lg font-plus-jakarta font-bold mt-10 mb-2.5">
            <?php echo $request['counts_text']; ?>
          </h6>
          <div class="flex items-center justify-center">
            <?php if( have_rows('request') ): while ( have_rows('request') ) : the_row(); ?>
              <?php if( have_rows('logo') ): while ( have_rows('logo') ) : the_row(); $count++; ?>
                <?php if ($count < 3): ?>
                  <div>
                    <img src="<?php the_sub_field('icon'); ?>"
                      class="h-[60px] align-middle" alt="">
                  </div>
                <?php endif;?>
              <?php endwhile; endif; ?>
            <?php endwhile; endif; $count=0; ?>
          </div>
          <div class="flex items-center justify-center">
            <?php if( have_rows('request') ): while ( have_rows('request') ) : the_row(); ?>
              <?php if( have_rows('logo') ): while ( have_rows('logo') ) : the_row(); $count++; ?>
                <?php if ($count > 2): ?>
                  <div>
                    <img src="<?php the_sub_field('icon'); ?>"
                      class="h-[60px] align-middle" alt="">
                  </div>
                <?php endif;?>
              <?php endwhile; endif; ?>
            <?php endwhile; endif; $count=0; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
  get_footer();
?>