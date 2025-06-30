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

  if (mobile) {
    // Hiển thị dọc, không dùng Swiper trên mobile
    return (
      <div className="flex flex-col gap-6">
        {data.map((item: any, index: number) => (
          <div key={index} className="w-full h-full flex flex-col p-6">
            <div className='container'>
              <img src={item.image_url} alt="" className="h-full w-full object-cover mb-6" />
            </div>
            <div className="items-center text-start">
              <h3 className="font-bold text-lg mb-3">{item.title}</h3>
              <p className="text-sm leading-relaxed">{item.description}</p>
            </div>
          </div>
        ))}
      </div>
    );
  }

  // Desktop: dùng Swiper như cũ
  return (
    <Swiper
      spaceBetween={spaceBetween}
      slidesPerView={slidesPerView}
      freeMode
      modules={modules}
    >
      {data.map((item: any, index: number) => (
        <SwiperSlide key={index} className="lg:w-[30%] h-auto flex flex-col">
          <div className="h-full w-full flex flex-col p-6 lg:p-10">
            <div className=''>
              <img src={item.image_url} alt="" className="lg:h-[300px] lg:w-[300px] mb-6" />
            </div>
            <div className="items-center text-start">
              <h3 className="font-bold text-lg lg:text-xl mb-3">{item.title}</h3>
              <p className="text-sm lg:text-base leading-relaxed">{item.description}</p>
            </div>
          </div>
        </SwiperSlide>
      ))}
    </Swiper>
  );
}