<?php get_header(); ?>
<?php $header_image = get_field('header_title'); ?>
<?php $main_image = get_field('main_image'); ?>
<?php $small_image = get_field('small_image'); ?>
<?php $section_2_image = get_field('image_section_2'); ?>
<div class="container">
    <section class="main_section">
        <div class="main_logo">
            <img src="<?php echo $header_image; ?>" class="img_nav"></img>
        </div>
        <div class="sector_1_content">
            <div class="sector_1_all_content">
                <div class="flex_container_1_title">
                    <div class="title_container">
                        <h1>
                            <span class="title">
                                <?php the_field('page_title'); ?>
                            </span>
                            <span class="subtitle text_border">
                                <?php the_field('page_subtitle'); ?>
                            </span>
                        </h1>
                    </div>
                    <div class="description">
                        <?php the_field('description'); ?>
                    </div>
                    <div class="higlighted_container">
                        <div class="left_rect"></div>
                        <span class="right_rect"></span>
                        <button>
                            <div class="higlighted_text"><?php the_field('highlight_text'); ?></div>
                        </button>
                    </div>
                    <div class="scrolldown_container">
                        <div class='scrolldown'>
                            <div class="chevrons">
                                <div class='chevrondown'></div>
                                <div class='chevrondown'></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex_container_1_img">
                    <div class="main_content">
                        <div class="main_img_container"><img src="<?php echo $main_image; ?>">
                            <div class="main_copyright"><?php the_field('main_copyright'); ?></div></img>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="second_section">
        <div class="flex-container_sector_2">
            <div class="flex-items_sector_2">
                <div class="bars">
                    <svg width="327" height="99" viewBox="0 0 327 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.8" clip-path="url(#clip0_1108_498)">
                            <mask id="mask0_1108_498" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-65"
                                y="-192" width="654" height="453">
                                <path d="M-64.5312 27.5364L168.235 260.302" stroke="#001F22" />
                                <path d="M-57.7651 24.0164L175.001 256.782" stroke="#001F22" />
                                <path d="M-50.999 20.4963L181.767 253.262" stroke="#001F22" />
                                <path d="M-44.2329 16.9763L188.533 249.742" stroke="#001F22" />
                                <path d="M-37.4668 13.4565L195.299 246.223" stroke="#001F22" />
                                <path d="M-30.7007 9.93628L202.065 242.702" stroke="#001F22" />
                                <path d="M-23.9346 6.41626L208.832 239.182" stroke="#001F22" />
                                <path d="M-17.1685 2.89648L215.598 235.663" stroke="#001F22" />
                                <path d="M-10.4023 -0.623538L222.364 232.143" stroke="#001F22" />
                                <path d="M-3.63623 -4.14356L229.13 228.623" stroke="#001F22" />
                                <path d="M3.12989 -7.66358L235.896 225.103" stroke="#001F22" />
                                <path d="M9.896 -11.1836L242.662 221.583" stroke="#001F22" />
                                <path d="M16.6621 -14.7036L249.428 218.062" stroke="#001F22" />
                                <path d="M23.4282 -18.2236L256.194 214.542" stroke="#001F22" />
                                <path d="M30.1943 -21.7434L262.96 211.023" stroke="#001F22" />
                                <path d="M36.9605 -25.2634L269.727 207.503" stroke="#001F22" />
                                <path d="M43.7266 -28.7837L276.493 203.982" stroke="#001F22" />
                                <path d="M50.4927 -32.3035L283.259 200.463" stroke="#001F22" />
                                <path d="M57.2588 -35.8235L290.025 196.943" stroke="#001F22" />
                                <path d="M64.0249 -39.3435L296.791 193.423" stroke="#001F22" />
                                <path d="M70.791 -42.8635L303.557 189.903" stroke="#001F22" />
                                <path d="M77.5571 -46.3835L310.323 186.383" stroke="#001F22" />
                                <path d="M84.3232 -49.9036L317.089 182.863" stroke="#001F22" />
                                <path d="M91.0894 -53.4236L323.855 179.343" stroke="#001F22" />
                                <path d="M97.8555 -56.9436L330.622 175.823" stroke="#001F22" />
                                <path d="M104.622 -60.4634L337.388 172.303" stroke="#001F22" />
                                <path d="M111.388 -63.9834L344.154 168.783" stroke="#001F22" />
                                <path d="M118.154 -67.5034L350.92 165.263" stroke="#001F22" />
                                <path d="M124.92 -71.0237L357.686 161.742" stroke="#001F22" />
                                <path d="M131.686 -74.5435L364.452 158.223" stroke="#001F22" />
                                <path d="M138.452 -78.0635L371.218 154.703" stroke="#001F22" />
                                <path d="M145.218 -81.5835L377.984 151.183" stroke="#001F22" />
                                <path d="M151.984 -85.1035L384.75 147.663" stroke="#001F22" />
                                <path d="M158.75 -88.6235L391.517 144.143" stroke="#001F22" />
                                <path d="M165.517 -92.1433L398.283 140.623" stroke="#001F22" />
                                <path d="M172.283 -95.6636L405.049 137.103" stroke="#001F22" />
                                <path d="M179.049 -99.1834L411.815 133.583" stroke="#001F22" />
                                <path d="M185.815 -102.704L418.581 130.062" stroke="#001F22" />
                                <path d="M192.581 -106.224L425.347 126.542" stroke="#001F22" />
                                <path d="M199.347 -109.743L432.113 123.023" stroke="#001F22" />
                                <path d="M206.113 -113.263L438.879 119.503" stroke="#001F22" />
                                <path d="M212.879 -116.783L445.646 115.983" stroke="#001F22" />
                                <path d="M219.646 -120.303L452.412 112.463" stroke="#001F22" />
                                <path d="M226.412 -123.823L459.178 108.943" stroke="#001F22" />
                                <path d="M233.178 -127.344L465.944 105.423" stroke="#001F22" />
                                <path d="M239.944 -130.864L472.71 101.903" stroke="#001F22" />
                                <path d="M246.71 -134.384L479.476 98.3826" stroke="#001F22" />
                                <path d="M253.476 -137.903L486.242 94.8628" stroke="#001F22" />
                                <path d="M260.242 -141.424L493.008 91.3425" stroke="#001F22" />
                                <path d="M267.008 -144.943L499.774 87.8227" stroke="#001F22" />
                                <path d="M273.774 -148.464L506.54 84.3025" stroke="#001F22" />
                                <path d="M280.541 -151.983L513.307 80.7827" stroke="#001F22" />
                                <path d="M287.307 -155.503L520.073 77.2627" stroke="#001F22" />
                                <path d="M294.073 -159.023L526.839 73.7427" stroke="#001F22" />
                                <path d="M300.839 -162.543L533.605 70.2227" stroke="#001F22" />
                                <path d="M307.605 -166.063L540.371 66.7026" stroke="#001F22" />
                                <path d="M314.371 -169.583L547.137 63.1827" stroke="#001F22" />
                                <path d="M321.137 -173.103L553.903 59.6628" stroke="#001F22" />
                            </mask>
                            <g mask="url(#mask0_1108_498)">
                                <rect x="0.463867" y="0.799316" width="326.171" height="98.28"
                                    fill="url(#paint0_linear_1108_498)" />
                            </g>
                        </g>
                        <defs>
                            <linearGradient id="paint0_linear_1108_498" x1="0.463868" y1="49.9393" x2="326.635"
                                y2="49.9394" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FF8882" />
                                <stop offset="1" stop-color="#FF8882" stop-opacity="0" />
                            </linearGradient>
                            <clipPath id="clip0_1108_498">
                                <rect width="326" height="99" fill="white" transform="translate(0.210938)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <div class="section_2_indicator"><?php the_field('section_2_indicator'); ?></div>
                </div>
                <div class="title_container_section_2">
                    <h1>
                        <span class="second_title">
                            <?php the_field('title_section_2'); ?>
                        </span>
                        <span class="second_subtitle text_border">
                            <?php the_field('subtitle_section_2'); ?>
                        </span>
                    </h1>
                </div>
            </div>
            <div class="flex-items_sector_2">
                <div class="extra_text">
                    <?php the_field('extra_text_section_2'); ?>
                </div>
            </div>
            <div class="flex-items_sector_2">
                <div class="secondary_content">
                    <div class="secondary_content_description">
                        <h3 class="secondary_description_title"><?php the_field('text_title_section_2'); ?></h3>
                        <span class="secondary_description"><?php the_field('text_section_2'); ?></span>
                    </div>
                    <div class="secondary_bg"></div>
                    <div class="secondary_img_container"><img src="<?php echo $section_2_image; ?>"></img>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="third_section">
        <div class="flex-container_section_3">
            <div class="flex-items_section_3">
                <div class="bars_white">
                    <svg width="327" height="100" viewBox="0 0 327 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.8" clip-path="url(#clip0_0_108)">
                            <mask id="mask0_0_108" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-262" y="-191"
                                width="654" height="453">
                                <path d="M391.288 27.9988L158.522 260.765" stroke="#001F22" />
                                <path d="M384.522 24.4788L151.756 257.245" stroke="#001F22" />
                                <path d="M377.756 20.9587L144.99 253.725" stroke="#001F22" />
                                <path d="M370.989 17.4388L138.223 250.205" stroke="#001F22" />
                                <path d="M364.223 13.9188L131.457 246.685" stroke="#001F22" />
                                <path d="M357.457 10.3988L124.691 243.165" stroke="#001F22" />
                                <path d="M350.691 6.87878L117.925 239.645" stroke="#001F22" />
                                <path d="M343.925 3.35876L111.159 236.125" stroke="#001F22" />
                                <path d="M337.159 -0.161136L104.393 232.605" stroke="#001F22" />
                                <path d="M330.393 -3.68116L97.6267 229.085" stroke="#001F22" />
                                <path d="M323.627 -7.20117L90.8606 225.565" stroke="#001F22" />
                                <path d="M316.861 -10.7212L84.0945 222.045" stroke="#001F22" />
                                <path d="M310.094 -14.2412L77.3284 218.525" stroke="#001F22" />
                                <path d="M303.328 -17.7611L70.5623 215.005" stroke="#001F22" />
                                <path d="M296.562 -21.2811L63.7961 211.485" stroke="#001F22" />
                                <path d="M289.796 -24.8012L57.03 207.965" stroke="#001F22" />
                                <path d="M283.03 -28.3212L50.2639 204.445" stroke="#001F22" />
                                <path d="M276.264 -31.8412L43.4978 200.925" stroke="#001F22" />
                                <path d="M269.498 -35.3612L36.7317 197.405" stroke="#001F22" />
                                <path d="M262.732 -38.8811L29.9656 193.885" stroke="#001F22" />
                                <path d="M255.966 -42.4011L23.1995 190.365" stroke="#001F22" />
                                <path d="M249.199 -45.9211L16.4334 186.845" stroke="#001F22" />
                                <path d="M242.433 -49.4412L9.66724 183.325" stroke="#001F22" />
                                <path d="M235.667 -52.9612L2.90113 179.805" stroke="#001F22" />
                                <path d="M228.901 -56.4811L-3.86498 176.285" stroke="#001F22" />
                                <path d="M222.135 -60.0011L-10.6311 172.765" stroke="#001F22" />
                                <path d="M215.369 -63.5211L-17.3972 169.245" stroke="#001F22" />
                                <path d="M208.603 -67.0411L-24.1633 165.725" stroke="#001F22" />
                                <path d="M201.837 -70.5612L-30.9295 162.205" stroke="#001F22" />
                                <path d="M195.071 -74.0811L-37.6956 158.685" stroke="#001F22" />
                                <path d="M188.304 -77.6011L-44.4617 155.165" stroke="#001F22" />
                                <path d="M181.538 -81.1211L-51.2278 151.645" stroke="#001F22" />
                                <path d="M174.772 -84.6411L-57.9939 148.125" stroke="#001F22" />
                                <path d="M168.006 -88.1611L-64.76 144.605" stroke="#001F22" />
                                <path d="M161.24 -91.681L-71.5261 141.085" stroke="#001F22" />
                                <path d="M154.474 -95.2011L-78.2922 137.565" stroke="#001F22" />
                                <path d="M147.708 -98.7211L-85.0583 134.045" stroke="#001F22" />
                                <path d="M140.942 -102.241L-91.8245 130.525" stroke="#001F22" />
                                <path d="M134.176 -105.761L-98.5906 127.005" stroke="#001F22" />
                                <path d="M127.409 -109.281L-105.357 123.485" stroke="#001F22" />
                                <path d="M120.643 -112.801L-112.123 119.965" stroke="#001F22" />
                                <path d="M113.877 -116.321L-118.889 116.445" stroke="#001F22" />
                                <path d="M107.111 -119.841L-125.655 112.925" stroke="#001F22" />
                                <path d="M100.345 -123.361L-132.421 109.405" stroke="#001F22" />
                                <path d="M93.5789 -126.881L-139.187 105.885" stroke="#001F22" />
                                <path d="M86.8127 -130.401L-145.953 102.365" stroke="#001F22" />
                                <path d="M80.0466 -133.921L-152.719 98.8451" stroke="#001F22" />
                                <path d="M73.2805 -137.441L-159.486 95.3251" stroke="#001F22" />
                                <path d="M66.5144 -140.961L-166.252 91.805" stroke="#001F22" />
                                <path d="M59.7483 -144.481L-173.018 88.285" stroke="#001F22" />
                                <path d="M52.9822 -148.001L-179.784 84.765" stroke="#001F22" />
                                <path d="M46.2161 -151.521L-186.55 81.2451" stroke="#001F22" />
                                <path d="M39.4499 -155.041L-193.316 77.7251" stroke="#001F22" />
                                <path d="M32.6838 -158.561L-200.082 74.2051" stroke="#001F22" />
                                <path d="M25.9177 -162.081L-206.848 70.6851" stroke="#001F22" />
                                <path d="M19.1516 -165.601L-213.615 67.165" stroke="#001F22" />
                                <path d="M12.3855 -169.121L-220.381 63.6451" stroke="#001F22" />
                                <path d="M5.61938 -172.641L-227.147 60.1251" stroke="#001F22" />
                            </mask>
                            <g mask="url(#mask0_0_108)">
                                <rect width="326.171" height="98.28" transform="matrix(-1 0 0 1 326.293 1.26184)"
                                    fill="url(#paint0_linear_0_108)" />
                            </g>
                        </g>
                        <defs>
                            <linearGradient id="paint0_linear_0_108" x1="1.21508e-06" y1="49.14" x2="326.171" y2="49.14"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                            <clipPath id="clip0_0_108">
                                <rect width="326" height="99" fill="white"
                                    transform="matrix(-1 0 0 1 326.546 0.462402)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <div class="section_3_indicator"><?php the_field('indicator_section_3'); ?></div>
                </div>
                <div class="section_3_titles">
                    <span class="title title_section_3">
                        <?php the_field('title_section_3'); ?>
                    </span>
                    <span class="subtitle_section_3 text_border_white">
                        <?php the_field('subtitle_section_3'); ?>
                    </span>
                </div>
            </div>
            <div class="flex-items_section_3_posts grid-container"></div>
            <div class="flex-items_section_3_pagination">
                <button id="load-more-button">Load More</button>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>