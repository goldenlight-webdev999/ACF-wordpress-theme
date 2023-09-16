<?php /* Template Name: About Page Template */ ?>
<?php
    get_header();
?>
  
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
  get_footer();
?>