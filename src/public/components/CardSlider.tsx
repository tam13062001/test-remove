import { Swiper, SwiperSlide } from 'swiper/react';
import {BaseProps} from "../core/get-props";
import {useMemo} from "@wordpress/element";
import useBreakpoint from "../hooks/useBreakpoint";

type CardSliderProps = {
  data: { image_url: string; title: string }[]
  slidesPerView: number
  slidesPerViewMobile?: number
}


export default function CardSlider(props: BaseProps<CardSliderProps>) {
  const { data = [] } = props.data

  const mobile = useBreakpoint()

  const slidesPerView = useMemo(() => {
    if (mobile) return props.data.slidesPerViewMobile || 1
    return props.data.slidesPerView || 1
  }, [])

  return (
    <Swiper
      spaceBetween={50}
      slidesPerView={slidesPerView}
    >
      {
        data.map((item: any, index: number) => (
          <SwiperSlide key={index}>
            <div className="lg:w-[785px] sm:h-[314px] ml-4 lg:mr-40  bg-white flex flex-col lg:justify-between lg:flex-row shadow-[0_0_10px_rgba(0,0,0,0.1)] mb-1 mt-1 md:h-[314px] w-full max-w-[785px]">
              <p className="ml-16 text-primary p-4 mt-16 text-Regular text-[24px]">
                {item.title}
              </p>
              <img
                className="lg:h-[314px] lg:w-[314px] object-cover"
                src={item.image_url} 
                alt="Data & AI"
              />
            </div>
          </SwiperSlide>
        ))
      }
    </Swiper>
  );
}