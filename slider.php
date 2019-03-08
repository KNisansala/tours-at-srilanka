<?php ?>


<section class="no-top no-bottom" aria-label="section-slider">
    <div class="fullwidthbanner-container">
        <div class="" id="revolution-slider-half">
            <ul>
                <?php
                foreach (Slider::all() as $img) {
                    ?>

                    <li  data-transition="parallaxtobottom" data-slotamount="10" data-masterspeed="1200" data-delay="5000">
                        <!--  BACKGROUND IMAGE -->
                        <img src="upload/slider/<?php echo $img['image_name'];?>" alt="" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="120" data-bgfitend="100" data-bgpositionend="center center"/>


                        <div class="tp-caption slide-sub-heading sft hidden-xs hidden-sm"
                             data-x="-115"
                             data-y="520"
                             data-speed="1000"
                             data-start="800"
                             data-easing="easeOutExpo"
                             data-endspeed="400">
                        </div>

                    </li>
                    <?php
                }
                ?>


            </ul>
            <div class="tp-bannertimer hide banner-line"></div>

        </div>
    </div>
</section>
