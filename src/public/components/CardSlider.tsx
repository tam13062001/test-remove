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
            <div className="bg-white  flex border border-gray-300">
              <p className="text-gray-600 p-8 mt-4">
                {item.title}
              </p>
              <img
                className="w-[324px] h-[324px] object-cover"
                src={item.image_url} alt="Data & AI"
              />
            </div>
          </SwiperSlide>
        ))
      }
    </Swiper>
  );
}