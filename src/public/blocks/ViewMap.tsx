
import React from 'react';

const ViewMapModal = () => {
  const [isOpen, setIsOpen] = React.useState(false);

  return (
    <>
      <button 
        id="viewAllMapBtn"
        className="lg:px-10 lg:py-2 px-2 py-0 text-white lg:text-[16px] text-[12px] font-bold px-12 py-2 bg-gradient-to-r from-secondary to-primary hover:opacity-90 transition-opacity"
        onClick={() => setIsOpen(true)}
      >
        View On Map
      </button>

      {/* Modal */}
      {isOpen && (
        <div 
          id="mapModal" 
          className="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
          onClick={() => setIsOpen(false)}
        >
          <div 
            className="bg-white rounded-lg w-full max-w-6xl h-[80vh] mx-4"
            onClick={(e) => e.stopPropagation()}
          >
            <div className="flex justify-between items-center p-4 border-b">
              <h3 className="text-xl font-bold">All Locations Map</h3>
              <a 
                className="text-2xl text-gray-500 hover:text-gray-700 transition-colors cursor-pointer"
                onClick={() => setIsOpen(false)}
              >
                &times;
              </a>
            </div>
            <div className="h-[calc(80vh-60px)] p-4">
              <iframe 
                src="https://www.google.com/maps/embed/v1/view?key=YOUR_API_KEY&center=-33.8569,151.2152&zoom=10" 
                width="100%" 
                height="100%" 
                style={{ border: 0 }} 
                allowFullScreen 
                loading="lazy"
              ></iframe>
            </div>
          </div>
        </div>
      )}
    </>
  );
};

export default ViewMapModal;