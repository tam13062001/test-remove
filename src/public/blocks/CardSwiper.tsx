import { Swiper, SwiperSlide } from 'swiper/react';
import {BaseProps} from "../core/get-props";
import {useMemo} from "@wordpress/element";
import useBreakpoint from "../hooks/useBreakpoint";
import {FreeMode} from "swiper/modules";
import {SwiperModule} from "swiper/types";

type CardSwiperProps = {
  data: { image_url: string; title: string, description: string }[]
  slidesPerView: number
  slidesPerViewMobile?: number
  freeMode: boolean
  spaceBetween: number
}


export default function CardSwiperBlock(props: BaseProps<CardSwiperProps>) {
  const { data = [], freeMode, spaceBetween = 24 } = props.data;

  const mobile = useBreakpoint();

  const slidesPerView = useMemo(() => {
    if (mobile) return props.data?.slidesPerViewMobile || props.data?.slidesPerView || 1;
    return props.data?.slidesPerView || 1;
  }, [props.data]);

  const modules = useMemo(() => {
    const data: SwiperModule[] = [];
    if (freeMode) data.push(FreeMode);
    return data;
  }, [freeMode]);

  return (
    <Swiper
      spaceBetween={spaceBetween}
      slidesPerView={slidesPerView}
      freeMode
      modules={modules}
    >
      {
        data.map((item: any, index: number) => (
          <SwiperSlide key={index} className="w-[85%] lg:w-[400px]">
            <div
              className={`
                h-full w-full flex flex-col 
                p-6 lg:p-10]}
              `}
            >
              <img src={item.image_url} alt="" className="lg:h-[300px] lg:w-[300px] mb-6" />
              <div className="items-center text-start">
                 <h3 className="font-bold text-lg lg:text-xl mb-3">{item.title}</h3>
                 <p className="text-sm lg:text-base leading-relaxed">{item.description}</p>
              </div>
             
            </div>
          </SwiperSlide>
        ))
      }
    </Swiper>
  );
}