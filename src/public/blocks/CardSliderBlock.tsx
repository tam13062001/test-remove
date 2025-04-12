import { Swiper, SwiperSlide } from 'swiper/react';
import {BaseProps} from "../core/get-props";
import {useMemo} from "@wordpress/element";
import useBreakpoint from "../hooks/useBreakpoint";
import {FreeMode} from "swiper/modules";
import {SwiperModule} from "swiper/types";

type CardSliderProps = {
  data: { image_url: string; title: string }[]
  slidesPerView: number
  slidesPerViewMobile?: number
  freeMode: boolean
  spaceBetween: number
}


export default function CardSliderBlock(props: BaseProps<CardSliderProps>) {
  const { data = [], freeMode, spaceBetween = 24 } = props.data

  const mobile = useBreakpoint()

  const slidesPerView = useMemo(() => {
    if (mobile) return props.data?.slidesPerViewMobile || props.data?.slidesPerView || 1
    return props.data?.slidesPerView || 1
  }, [props.data])

  const modules = useMemo(() => {
    const data: SwiperModule[] = []
    if (freeMode) data.push(FreeMode)
    return data
  }, [freeMode])

  return (
    <Swiper
      spaceBetween={spaceBetween}
      slidesPerView={slidesPerView}
      freeMode
      modules={modules}
    >
      {
        data.map((item: any, index: number) => (
          <SwiperSlide key={index} className={'lg:w-[785px]'}>
            <div className="ml-1 lg:ml-10 h-[140px] lg:h-[314px] bg-white flex justify-between flex-row shadow-[0_0_10px_rgba(0,0,0,0.15)] mb-1 mt-1 ">
              <div className="flex-1 flex items-center px-4 text-primary lg:p-4 lg:px-20 text-[16px] lg:text-[24px]">
                {item.title}
              </div>
              <div className={'shrink-0 aspect-square'}>
                <img
                  className="object-cover h-full"
                  src={item.image_url}
                />
              </div>
            </div>
          </SwiperSlide>
        ))
      }
    </Swiper>
  );
}