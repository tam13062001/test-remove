import React from 'react';

type Props = {
  attributes?: {
    image_url?: string;
  };
};

const ViewMapModal: React.FC<Props> = ({ attributes }) => {
  const [isOpen, setIsOpen] = React.useState(false);
  const image_url = attributes?.image_url;
  
  console.log("All props:", { attributes });
  console.log("image_url in modal:", image_url);

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
              <button 
                className="text-2xl text-gray-500 hover:text-gray-700 transition-colors cursor-pointer"
                onClick={() => setIsOpen(false)}
              >
                &times;
              </button>
            </div>
            <div className="h-[calc(80vh-60px)] p-4 flex items-center justify-center">
              {image_url ? (
                <img 
                  src={image_url} 
                  alt="Map" 
                  className="w-full h-full object-contain"
                />
              ) : (
                <p>No image provided</p>
              )}
            </div>
          </div>
        </div>
      )}
    </>
  );
};

export default ViewMapModal;