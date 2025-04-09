import { Swiper, SwiperSlide } from 'swiper/react';
import {BaseProps} from "../core/get-props";
import {useMemo} from "@wordpress/element";
import useBreakpoint from "../hooks/useBreakpoint";
import {FreeMode, Pagination, Navigation} from "swiper/modules";

type CardSliderProps = {
  slides: { image_url: string; title: string; description: string; link: string; link_text: string }[]
  slidesPerView: number
  slidesPerViewMobile?: number
  spaceBetween: number
}


export default function StorySliderBlock(props: BaseProps<CardSliderProps>) {
  const { slides = [], spaceBetween = 24 } = props.data

  const mobile = useBreakpoint()

  const slidesPerView = useMemo(() => {
    if (mobile) return props.data?.slidesPerViewMobile || props.data?.slidesPerView || 1
    return props.data?.slidesPerView || 1
  }, [props.data])

  return (
    <div className={'relative'}>
      <div className={'absolute top-[180px] lg:top-[600px] z-10 shadow-md left-1/2 lg:left-1/3 -translate-x-1/2'}>
        <div
          className="flex items-center justify-center gap-2 lg:gap-4 bg-white px-2 lg:px-6 py-2 lg:py-4 rounded-full">
          <div className="story-prev cursor-pointer">
            <svg className="w-5 h-5 text-blue-600 hover:text-blue-800" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
            </svg>
          </div>
          <div className="story-pagination flex items-center gap-1 lg:gap-2"></div>
          <div className="story-next cursor-pointer">
            <svg className="w-5 h-5 text-blue-600 hover:text-blue-800" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
          </div>
        </div>
      </div>
      <Swiper
        spaceBetween={spaceBetween}
        slidesPerView={slidesPerView}
        modules={[ Navigation, FreeMode, Pagination ]}
        pagination={{
          clickable: true,
          el: '.story-pagination'
        }}
        navigation={{
          nextEl: '.story-next',
          prevEl: '.story-prev'
        }}
      >
        {
          slides.map((item, index: number) => (
            <SwiperSlide key={index} className={'lg:w-[785px] w-full relative overflow-hidden'}>
              <div>
                <div className={'lg:shrink-0 lg:w-2/3 h-[230px] lg:h-[678px]'}>
                  <img
                    className="object-cover w-full h-full"
                    src={item.image_url}
                  />
                </div>
                <div
                  className={'px-5 lg:px-0 lg:absolute w-full lg:w-1/2 bg-white lg:right-0  lg:top-1/2 lg:-translate-y-1/2'}>
                  <div className={'px-5 lg:px-[116px] shadow-xl py-5 lg:py-[70px]'}>
                    <h2 className="lg:text-[36px] text-[20px] text-primary mb-[10px] lg:mb-8">
                      {item.title}
                    </h2>
                    <p className="lg:text-[20px] text-[16px] mb-[10px] lg:mb-8">
                      {item.description}
                    </p>
                    <a
                      href={item.link ? item.link : '#'}
                      className="text-primary text-[16px] lg:text-[20px] inline-flex items-center font-mixed md:text-lg"
                    >
                      {item.link_text}
                      &nbsp;
                      <i className="fa fa-chevron-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </SwiperSlide>
          ))
        }
      </Swiper>

    </div>

  );
}

// const mobileSlider = new Swiper('.swiper-mobile', {
//   loop: true,
//   navigation: {
//     nextEl: '.swiper-button-next-mobile',
//     prevEl: '.swiper-button-prev-mobile',
//   },
//   pagination: {
//     el: '.swiper-pagination-mobile',
//     clickable: true,
//     renderBullet: function (index, className) {
//       const isActive = index === this.realIndex;
//       return `<span class="${className} w-3 h-3 rounded-full ${isActive ? 'bg-blue-600' : 'bg-gray-300'}"></span>`;
//     },
//   },
// });
//
// // Desktop Slider
// const desktopSlider = new Swiper('.swiper-desktop', {
//   loop: true,
//   navigation: {
//     nextEl: '.swiper-button-next-desktop',
//     prevEl: '.swiper-button-prev-desktop',
//   },
//   pagination: {
//     el: '.swiper-pagination-desktop',
//     clickable: true,
//     bulletClass: 'swiper-pagination-bullet',
//     bulletActiveClass: 'swiper-pagination-bullet-active',
//   },
// });