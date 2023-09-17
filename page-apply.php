<?php /* Template Name: Apply Page Template */ ?>
<?php
  get_header();
?>
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
  get_footer();
?>