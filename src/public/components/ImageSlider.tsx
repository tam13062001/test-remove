import { useState } from 'react';

const SliderControls = ({ totalSlides }) => {
  const [currentSlide, setCurrentSlide] = useState(0);

  const goToPrevSlide = () => {
    setCurrentSlide((prev) => (prev === 0 ? totalSlides - 1 : prev - 1));
  };

  const goToNextSlide = () => {
    setCurrentSlide((prev) => (prev === totalSlides - 1 ? 0 : prev + 1));
  };

  const goToSlide = (index) => {
    setCurrentSlide(index);
  };

  return (
    <div className="flex items-center justify-center gap-4 bg-white px-6 py-6 rounded-full shadow-md w-fit absolute bottom-10 left-12 mb-8 ml-60">
      {/* Previous arrow */}
      <a href="#" className="p-0" onClick={(e) => { e.preventDefault(); goToPrevSlide(); }}>
        <svg className="w-5 h-5 text-blue-600 hover:text-blue-800" fill="none" stroke="currentColor" strokeWidth="2" viewBox="0 0 24 24">
          <path strokeLinecap="round" strokeLinejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
      </a>

      {/* Dots */}
      <div className="flex items-center gap-4">
        {Array.from({ length: totalSlides }).map((_, index) => (
          <span
            key={index}
            className={`w-3 h-3 rounded-full cursor-pointer ${currentSlide === index ? 'bg-blue-600' : 'bg-gray-300'}`}
            onClick={() => goToSlide(index)}
          />
        ))}
      </div>

      {/* Next arrow */}
      <a href="#" className="p-0" onClick={(e) => { e.preventDefault(); goToNextSlide(); }}>
        <svg className="w-5 h-5 text-blue-600 hover:text-blue-800" fill="none" stroke="currentColor" strokeWidth="2" viewBox="0 0 24 24">
          <path strokeLinecap="round" strokeLinejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </a>
    </div>
  );
};

export default SliderControls;