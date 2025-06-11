import { useState, useEffect } from "@wordpress/element";

const BackToTop = () => {
  const [isVisible, setIsVisible] = useState(false);

  // Hiển thị nút khi scroll xuống 300px
  const toggleVisibility = () => {
    if (window.pageYOffset > 300) {
      setIsVisible(true);
    } else {
      setIsVisible(false);
    }
  };

  // Scroll mượt lên đầu trang
  const scrollToTop = () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  };

  useEffect(() => {
    window.addEventListener('scroll', toggleVisibility);
    return () => window.removeEventListener('scroll', toggleVisibility);
  }, []);

  return (
    <a
      onClick={scrollToTop}
      className={`cursor-pointer fixed bottom-8 right-5 z-50 flex  items-center gap-1 transition-all duration-300 ${
        isVisible ? 'opacity-100' : 'opacity-0 pointer-events-none'
      }`}
      aria-label="Back to top"
    >
      <div className="text-[14px] font-bold text-black">BACK TO TOP</div>
      
      {/* Hexagon background chỉ cho mũi tên */}
      <div className="relative w-8 h-8  flex items-center justify-center">
        <div 
          className="hexagon-rounded absolute inset-0 bg-blue-600 hover:bg-blue-700 transition-all duration-300"
          style={{
            clipPath: 'polygon(50% 0%, 90% 25%, 90% 75%, 50% 100%, 10% 75%, 10% 25%)'
          }}
        ></div>
        <span className="text-white text-[14px] font-bold relative">↑</span>
      </div>
    </a>
  );
};


export default BackToTop;