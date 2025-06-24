import React, { useCallback, useEffect, useState } from 'react';
import { BaseProps } from "../core/get-props";
import { Button, Modal } from "antd";
import { CloseOutlined } from "@ant-design/icons";
import { GoogleMap, InfoWindow, Marker, useJsApiLoader } from '@react-google-maps/api'

type StoreLocation = {
  id: number;
  name: string;
  position: { lat: number; lng: number };
  address: string;
  phone?: string;
  email?: string;
};

type ViewMapModalProps = {
  attributes?: {
    apiKey?: string;
    defaultZoom?: number;
    storeLocations?: StoreLocation[];
    image_url?: string;
  };
  selectedAddress?: string | null;
};

const ViewMapModal: React.FC<BaseProps<ViewMapModalProps>> = (props) => {
  const { attributes, selectedAddress } = props.data;
  const [isOpen, setIsOpen] = useState(false);
  const [selectedMarker, setSelectedMarker] = useState<string | null>(null);

  const image_url = attributes?.image_url || '/default-marker.png';

  const [dataCenters] = useState<StoreLocation[]>(attributes?.storeLocations || [
    {
      id: 1,
      name: 'Datum Consulting Philippines, Inc.',
      position: { lat: 14.5623, lng: 121.0365 },
      address: '8 Rockwell Dr, Makati, Metro Manila',
    },
    {
      id: 2,
      name: 'Datum Thailand',
      position: { lat: 13.7563, lng: 100.5018 },
      address: 'Bangkok, Thailand',
    },
    {
      id: 3,
      name: 'Datum Consulting VN Company LTD',
      position: { lat: 10.762622, lng: 106.660172 },
      address: '52B2, Sala Residential Area, District 2. HCMC',
      phone: '848 1234 5678',
      email: 'vn@datumhq.com'
    },
    {
      id: 4,
      name: 'Datum New Zealand',
      position: { lat: -36.8540, lng: 174.7695 },
      address: '70 Symonds Street, Auckland',
    },
    {
      id: 5,
      name: 'Datum Australia (Adelaide)',
      position: { lat: -34.9214, lng: 138.6262 },
      address: '8 Beulah Road, Norwood, Adelaide',
    }
  ]);

  const apiKey = attributes?.apiKey;
  const defaultZoom = attributes?.defaultZoom || 5;

  const { isLoaded } = useJsApiLoader({
    id: 'google-map-script',
    googleMapsApiKey: apiKey || ''
  })

  useEffect(() => {
    if (selectedAddress) {
      const location = dataCenters.find(loc => loc.address === selectedAddress);
      if (location) {
        setSelectedMarker(location.address);
        setIsOpen(true);
      }
    }
  }, [selectedAddress, dataCenters]);

  const onCloseModalBtnClick = () => {
    setIsOpen(false);
    setSelectedMarker(null);
  };

  const renderDataCenters = useCallback(() => {
    if (!Array.isArray(dataCenters) || !isLoaded) return null;

    return dataCenters.map(dataCenter => (
      <Marker
        key={dataCenter.id}
        position={dataCenter.position}
        icon={image_url}
        onClick={() => setSelectedMarker(dataCenter.address)}
      >
        {selectedMarker === dataCenter.address && (
          <InfoWindow onCloseClick={() => setSelectedMarker(null)}>
            <div className="p-2 max-w-xs">
              <h3 className="font-bold text-lg mb-1">{dataCenter.name}</h3>
              <p className="lg:text-[16px] mb-1">{dataCenter.address}</p>
              {dataCenter.phone && (
                <p className="lg:text-[16px] text-[#2569ED]">Phone: {dataCenter.phone}</p>
              )}
              {dataCenter.email && (
                <p className="lg:text-[16px] text-[#2569ED]">Email: {dataCenter.email}</p>
              )}
            </div>
          </InfoWindow>
        )}
      </Marker>
    ));
  }, [dataCenters, selectedMarker, isLoaded, image_url]);

  return (
    <Modal
      footer={null}
      width={'80%'}
      open={isOpen}
      onCancel={onCloseModalBtnClick}
      styles={{
        content: { padding: 0 },
        body: { padding: 0 }
      }}
      closeIcon={null}
    >
      <div className="relative h-[80vh]">
        <div className="absolute right-0 top-0 translate-x-1/2 -translate-y-1/2 z-10">
          <Button 
            size={'small'} 
            shape={'circle'} 
            icon={<CloseOutlined />} 
            onClick={onCloseModalBtnClick} 
          />
        </div>

        {isLoaded ? (
          <GoogleMap
            mapContainerStyle={{ height: '100%' }}
            center={dataCenters[0]?.position || { lat: 10.762622, lng: 106.660172 }}
            zoom={defaultZoom}
            options={{
              styles: [
                {
                  featureType: "all",
                  elementType: "labels",
                  stylers: [{ visibility: "off" }]
                },
                {
                  featureType: "poi",
                  elementType: "labels.icon",
                  stylers: [{ visibility: "off" }]
                }
              ]
            }}
          >
            {renderDataCenters()}
          </GoogleMap>
        ) : (
          <div className="h-full flex items-center justify-center">
            Loading map...
          </div>
        )}
      </div>
    </Modal>
  );
};

export default ViewMapModal;