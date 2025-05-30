<section class="relative bg-black py-14 dark:bg-transparent lg:py-[100px]">
    <div class="absolute top-0 ltr:right-0 rtl:left-0 rtl:-rotate-180">
        <svg width="758" height="741" viewBox="0 0 758 741" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.03">
                <ellipse
                    opacity="0.1"
                    cx="752"
                    cy="370.646"
                    rx="750"
                    ry="749.646"
                    stroke="white"
                    stroke-width="3"
                    stroke-miterlimit="4.62023"
                    stroke-linecap="round"
                    stroke-dasharray="35 50 15 15"
                />
                <path
                    opacity="0.1"
                    d="M1443.13 370.646C1443.13 752.153 1133.7 1061.43 752 1061.43C370.296 1061.43 60.8655 752.153 60.8655 370.646C60.8655 -10.8606 370.296 -320.134 752 -320.134C1133.7 -320.134 1443.13 -10.8606 1443.13 370.646Z"
                    stroke="white"
                    stroke-width="3"
                />
                <ellipse
                    opacity="0.2"
                    cx="752"
                    cy="370.646"
                    rx="634.561"
                    ry="634.207"
                    stroke="white"
                    stroke-width="3"
                    stroke-miterlimit="4.62023"
                    stroke-linecap="round"
                    stroke-dasharray="35 50 15 15"
                />
                <path
                    opacity="0.3"
                    d="M1328.4 370.646C1328.4 688.789 1070.34 946.696 752 946.696C433.66 946.696 175.596 688.789 175.596 370.646C175.596 52.5037 433.66 -205.403 752 -205.403C1070.34 -205.403 1328.4 52.5037 1328.4 370.646Z"
                    stroke="white"
                    stroke-width="3"
                />
                <ellipse
                    opacity="0.4"
                    cx="752"
                    cy="370.646"
                    rx="519.83"
                    ry="519.476"
                    stroke="white"
                    stroke-width="3"
                    stroke-miterlimit="4.62023"
                    stroke-linecap="round"
                    stroke-dasharray="35 50 15 15"
                />
                <path
                    opacity="0.5"
                    d="M1211.55 370.646C1211.55 624.251 1005.8 829.84 752 829.84C498.197 829.84 292.452 624.251 292.452 370.646C292.452 117.041 498.197 -88.5479 752 -88.5479C1005.8 -88.5479 1211.55 117.041 1211.55 370.646Z"
                    stroke="white"
                    stroke-width="3"
                />
                <path
                    opacity="0.6"
                    d="M1155.6 370.646C1155.6 593.351 974.903 773.891 752 773.891C529.097 773.891 348.401 593.351 348.401 370.646C348.401 147.942 529.097 -32.5986 752 -32.5986C974.903 -32.5986 1155.6 147.942 1155.6 370.646Z"
                    stroke="white"
                    stroke-width="3"
                />
                <ellipse
                    opacity="0.7"
                    cx="752"
                    cy="370.646"
                    rx="350.567"
                    ry="350.212"
                    stroke="white"
                    stroke-width="3"
                    stroke-miterlimit="4.62023"
                    stroke-linecap="round"
                    stroke-dasharray="35 50 15 15"
                />
                <path
                    opacity="0.8"
                    d="M1040.16 370.647C1040.16 529.596 911.148 658.453 752 658.453C592.852 658.453 463.84 529.596 463.84 370.647C463.84 211.698 592.852 82.8408 752 82.8408C911.148 82.8408 1040.16 211.698 1040.16 370.647Z"
                    stroke="white"
                    stroke-width="3"
                />
                <ellipse
                    opacity="0.9"
                    cx="752"
                    cy="370.646"
                    rx="223.088"
                    ry="222.734"
                    stroke="white"
                    stroke-width="3"
                    stroke-miterlimit="4.62023"
                    stroke-linecap="round"
                    stroke-dasharray="35 50 15 15"
                />
                <path
                    d="M909.848 370.646C909.848 457.624 839.18 528.14 752 528.14C664.82 528.14 594.152 457.624 594.152 370.646C594.152 283.667 664.82 213.151 752 213.151C839.18 213.151 909.848 283.667 909.848 370.646Z"
                    stroke="white"
                    stroke-width="3"
                />
                <ellipse
                    cx="752"
                    cy="370.646"
                    rx="106.941"
                    ry="106.586"
                    stroke="white"
                    stroke-width="3"
                    stroke-miterlimit="4.62023"
                    stroke-linecap="round"
                    stroke-dasharray="35 50 15 15"
                />
            </g>
        </svg>
    </div>
    <div class="container">
        <div class="heading text-center ltr:lg:text-left rtl:lg:text-right">
            <h6>Testimonial</h6>
            <h4 class="!text-white">Feedback from our clients</h4>
        </div>
        <div class="mx-auto lg:w-11/12">
            <div class="swiper mySwiper relative sm:py-12 md:py-0">
                <div class="swiper-wrapper">
                    @foreach([
                        [
                            'name' => 'Emily Carter',
                            'review' => 'Video-Creator.pro completely transformed the way we create social content. What used to take hours now takes minutes — and the results are consistently eye-catching. The token system also gives us flexibility without commitment. Love it!',
                            'position' => 'Content Strategist at BoldWave Media',
                            'image' => asset('assets/images/testimonial.png')
                        ],
                        [
                            'name' => 'Luca Moretti',
                            'review' => 'We use Video-Creator.pro to turn product descriptions into short promotional videos. It’s fast, easy to use, and perfect for our e-commerce campaigns. The AI quality is surprisingly good — like having a full creative team on autopilot.',
                            'position' => 'Founder of SnapCommerce',
                            'image' => asset('assets/images/testimonial3.png')
                        ],
                    ] as $item)
                        <div class="swiper-slide">
                            <div class="items-center gap-4 sm:grid sm:grid-cols-3">
                                <div class="col-span-2">
                                    <div class="relative rounded-3xl bg-white/[0.02] p-6">
                                        <img
                                            src="{{ asset('assets/images/blue-quote.png') }}"
                                            alt="blue-quote"
                                            class="absolute top-0 ltr:right-0 rtl:left-0 sm:-top-6 ltr:sm:-right-6 rtl:sm:-left-6"
                                        />
                                        <div class="pb-8">
                                            <svg width="96" height="16" viewBox="0 0 96 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M86.2864 2.84744C87.0637 1.5558 88.9363 1.5558 89.7136 2.84744L90.1964 3.64962C90.4756 4.11365 90.9311 4.44459 91.4587 4.56678L92.3708 4.77803C93.8395 5.11816 94.4181 6.8991 93.4299 8.03752L92.8162 8.74454C92.4612 9.15352 92.2872 9.68898 92.334 10.2285L92.4149 11.1613C92.5453 12.6631 91.0303 13.7638 89.6423 13.1757L88.7802 12.8105C88.2815 12.5993 87.7185 12.5993 87.2198 12.8105L86.3577 13.1757C84.9697 13.7638 83.4547 12.6631 83.5851 11.1613L83.666 10.2285C83.7128 9.68899 83.5388 9.15352 83.1838 8.74454L82.5701 8.03752C81.5819 6.89911 82.1605 5.11816 83.6292 4.77803L84.5413 4.56678C85.0689 4.44459 85.5244 4.11365 85.8036 3.64962L86.2864 2.84744Z"
                                                    fill="#FFBD11"
                                                />
                                                <path
                                                    d="M66.2864 2.84744C67.0637 1.5558 68.9363 1.5558 69.7136 2.84744L70.1964 3.64962C70.4756 4.11365 70.9311 4.44459 71.4587 4.56678L72.3708 4.77803C73.8395 5.11816 74.4181 6.8991 73.4299 8.03752L72.8162 8.74454C72.4612 9.15352 72.2872 9.68898 72.334 10.2285L72.4149 11.1613C72.5453 12.6631 71.0303 13.7638 69.6423 13.1757L68.7802 12.8105C68.2815 12.5993 67.7185 12.5993 67.2198 12.8105L66.3577 13.1757C64.9697 13.7638 63.4547 12.6631 63.5851 11.1613L63.666 10.2285C63.7128 9.68899 63.5388 9.15352 63.1838 8.74454L62.5701 8.03752C61.5819 6.89911 62.1605 5.11816 63.6292 4.77803L64.5413 4.56678C65.0689 4.44459 65.5244 4.11365 65.8036 3.64962L66.2864 2.84744Z"
                                                    fill="#FFBD11"
                                                />
                                                <path
                                                    d="M46.2864 2.84744C47.0637 1.5558 48.9363 1.5558 49.7136 2.84744L50.1964 3.64962C50.4756 4.11365 50.9311 4.44459 51.4587 4.56678L52.3708 4.77803C53.8395 5.11816 54.4181 6.8991 53.4299 8.03752L52.8162 8.74454C52.4612 9.15352 52.2872 9.68898 52.334 10.2285L52.4149 11.1613C52.5453 12.6631 51.0303 13.7638 49.6423 13.1757L48.7802 12.8105C48.2815 12.5993 47.7185 12.5993 47.2198 12.8105L46.3577 13.1757C44.9697 13.7638 43.4547 12.6631 43.5851 11.1613L43.666 10.2285C43.7128 9.68899 43.5388 9.15352 43.1838 8.74454L42.5701 8.03752C41.5819 6.89911 42.1605 5.11816 43.6292 4.77803L44.5413 4.56678C45.0689 4.44459 45.5244 4.11365 45.8036 3.64962L46.2864 2.84744Z"
                                                    fill="#FFBD11"
                                                />
                                                <path
                                                    d="M26.2864 2.84744C27.0637 1.5558 28.9363 1.5558 29.7136 2.84744L30.1964 3.64962C30.4756 4.11365 30.9311 4.44459 31.4587 4.56678L32.3708 4.77803C33.8395 5.11816 34.4181 6.8991 33.4299 8.03752L32.8162 8.74454C32.4612 9.15352 32.2872 9.68898 32.334 10.2285L32.4149 11.1613C32.5453 12.6631 31.0303 13.7638 29.6423 13.1757L28.7802 12.8105C28.2815 12.5993 27.7185 12.5993 27.2198 12.8105L26.3577 13.1757C24.9697 13.7638 23.4547 12.6631 23.5851 11.1613L23.666 10.2285C23.7128 9.68899 23.5388 9.15352 23.1838 8.74454L22.5701 8.03752C21.5819 6.89911 22.1605 5.11816 23.6292 4.77803L24.5413 4.56678C25.0689 4.44459 25.5244 4.11365 25.8036 3.64962L26.2864 2.84744Z"
                                                    fill="#FFBD11"
                                                />
                                                <path
                                                    d="M6.28638 2.84744C7.0637 1.5558 8.9363 1.5558 9.71362 2.84744L10.1964 3.64962C10.4756 4.11365 10.9311 4.44459 11.4587 4.56678L12.3708 4.77803C13.8395 5.11816 14.4181 6.8991 13.4299 8.03752L12.8162 8.74454C12.4612 9.15352 12.2872 9.68898 12.334 10.2285L12.4149 11.1613C12.5453 12.6631 11.0303 13.7638 9.64225 13.1757L8.78018 12.8105C8.28151 12.5993 7.71849 12.5993 7.21982 12.8105L6.35775 13.1757C4.96968 13.7638 3.45472 12.6631 3.58506 11.1613L3.66601 10.2285C3.71283 9.68899 3.53885 9.15352 3.18383 8.74454L2.57009 8.03752C1.58187 6.89911 2.16054 5.11816 3.62916 4.77803L4.54126 4.56678C5.06887 4.44459 5.52437 4.11365 5.80362 3.64962L6.28638 2.84744Z"
                                                    fill="#FFBD11"
                                                />
                                            </svg>
                                        </div>
                                        <p class="relative font-medium italic text-white">
                                            {{ $item['review'] }}
                                            <span class="absolute -top-2 ltr:-left-2 rtl:-right-2">
                                                            <svg width="100" height="73" viewBox="0 0 100 73"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g opacity="0.05">
                                                                    <path
                                                                        d="M79.5222 0C85.1084 0 89.8948 2.12795 93.8833 6.1167C98.1392 10.1054 100 14.8935 100 20.2128C100 25.2666 98.4045 29.7875 94.9462 33.7764C91.4881 38.0323 85.9039 38.8302 81.3825 39.0952C82.1803 45.7443 85.9037 52.6589 89.3619 57.4472C89.8944 58.245 90.425 59.0427 91.2246 59.5752C92.2876 60.6382 92.2876 62.2356 91.2246 63.2986L83.5126 71.543C82.4495 72.8732 80.3216 72.606 79.2567 71.543C76.0657 68.0849 72.8731 63.831 70.2144 59.5751C62.7675 47.6072 59.044 35.6393 59.044 23.669C59.044 16.7544 61.1719 10.9032 65.1606 6.64734C69.1493 2.39334 74.2029 0.000144939 79.5217 0.000144939L79.5222 0Z"
                                                                        fill="#93A2B2"
                                                                    />
                                                                    <path
                                                                        d="M20.4783 0C26.0645 0 30.8509 2.12795 34.8394 6.1167C39.0952 10.1054 40.9561 14.8935 40.9561 20.2128C40.9561 25.2666 39.3606 29.7875 35.9023 33.7764C32.4442 38.0323 26.86 38.8302 22.3386 39.0952C23.1363 45.7443 26.8597 52.6589 30.318 57.4472C30.8504 58.245 31.381 59.0427 32.1806 59.5752C33.2437 60.6382 33.2437 62.2356 32.1806 63.2986L24.4686 71.543C23.4056 72.8732 21.2776 72.606 20.2128 71.543C17.0218 68.0849 13.8292 63.831 11.1705 59.5751C3.72351 47.6072 7.62939e-06 35.6393 7.62939e-06 23.669C7.62939e-06 16.7544 2.12797 10.9032 6.11671 6.64734C10.1054 2.39334 14.8921 0.000144939 20.4778 0.000144939L20.4783 0Z"
                                                                        fill="#93A2B2"
                                                                    />
                                                                </g>
                                                            </svg>
                                                        </span>
                                        </p>
                                        <div class="mt-12">
                                            <h5 class="font-extrabold text-primary">{{ $item['name'] }}</h5>
                                            <h6 class="text-sm font-bold italic">{{ $item['position'] }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- <img
                                    src="assets/images/testimonial.png"
                                    alt="testimonial"
                                    class="mx-auto mt-4 h-20 w-20 rounded-full object-cover object-top ltr:ml-auto rtl:mr-auto sm:mt-0 sm:h-auto sm:w-auto sm:rounded-[150px] sm:object-scale-down ltr:sm:mr-0 rtl:sm:ml-0"
                                /> -->
                                <div
                                    class="mx-auto mt-4 h-20 w-20 max-w-[255px] overflow-hidden rounded-full bg-white ltr:ml-auto rtl:mr-auto dark:bg-gray-dark sm:mt-0 sm:h-auto sm:w-auto sm:rounded-[150px] ltr:sm:mr-0 rtl:sm:ml-0"
                                >
                                    <img src="{{ $item['image'] }}" alt="testimonial"
                                         class="h-full w-full object-cover object-top"/>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div
                    class="bottom-0 z-[1] mt-5 flex items-center justify-center gap-4 ltr:right-1/3 rtl:left-1/3 sm:absolute sm:mt-0 sm:justify-end"
                >
                    <button
                        type="button"
                        class="testimonial-swiper-button-prev static mt-0 flex h-10 w-10 items-center justify-center rounded-full bg-white/5 transition after:text-[0px] hover:bg-secondary rtl:rotate-180"
                    >
                        <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.95007 1.2002L1.48924 5.3424C1.06317 5.73803 1.06317 6.41236 1.48924 6.80799L5.95007 10.9502"
                                stroke="white"
                                stroke-width="2"
                                stroke-linecap="round"
                            />
                        </svg>
                    </button>
                    <button
                        type="button"
                        class="testimonial-swiper-button-next static mt-0 flex h-10 w-10 items-center justify-center rounded-full bg-white/5 transition after:text-[0px] hover:bg-secondary rtl:rotate-180"
                    >
                        <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.05005 10.7998L5.51089 6.6576C5.93695 6.26197 5.93695 5.58764 5.51089 5.19201L1.05005 1.0498"
                                stroke="white"
                                stroke-width="2"
                                stroke-linecap="round"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
