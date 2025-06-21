import React, { useCallback, useRef, useState } from 'react';
import { BaseProps } from "../core/get-props";
import { Button, Modal } from "antd";
import { CloseOutlined } from "@ant-design/icons";
import {GoogleMap, InfoWindow, Marker, useJsApiLoader} from '@react-google-maps/api'

type StoreLocation = {
  id: number;
  name: string;
  position: { lat: number; lng: number };
  address: string;
  phone: string;
  email: string;
};

type ViewMapModalProps = {
  attributes?: {
    apiKey?: string;
    defaultZoom?: number;
    storeLocations?: StoreLocation[];
    image_url?: string;
  };
};

const ViewMapModal: React.FC<BaseProps<ViewMapModalProps>> = (props) => {
  const { attributes } = props.data;
  const [isOpen, setIsOpen] = useState(false);
  const [selectedMarker, setSelectedMarker] = useState(null)

  const image_url = attributes?.image_url || '/default-marker.png';

  const [dataCenters] = useState(attributes?.storeLocations || [
    {
      id: 1,
      name: 'Datum Consulting Philippines, Inc.',
      position: { lat: 14.5623, lng: 121.0365 },
      address: '8 Rockwell Dr, Makati, Metro Manila',
      phone: '848 1234 5678',
      email: 'ph@datumhq.com'
    },
    {
      id: 2,
      name: 'Datum Thailand',
      position: { lat: 13.7563, lng: 100.5018 },
      address: 'Bangkok, Thailand',
      phone: 'xxx xxxx xxx',
      email: 'th@datumhq.com'
    },
    {
      id: 3,
      name: 'Datum Consulting VN Company LTD',
      position: { lat: 10.762622, lng: 106.660172 },
      address: '52B2, Sala Residential Area, District 2. HCMC',
      phone: '848 1234 5678',
      email: 'vn@datumhq.com'
    }
  ])

  const apiKey = attributes?.apiKey;
  const defaultZoom = attributes?.defaultZoom || 5;

  const { isLoaded } = useJsApiLoader({
    id: 'google-map-script',
    googleMapsApiKey: apiKey
  })

  const onCloseModalBtnClick = () => {
    setIsOpen(false);
  };

  const onOpenModalBtnClick = () => {
    setIsOpen(true)
  };

  const renderDataCenters = useCallback(() => {
    if (!Array.isArray(dataCenters) || !isLoaded) return null


    return dataCenters.map(dataCenter => (
      <Marker
        position={dataCenter.position}
        icon={image_url}
        onClick={() => setSelectedMarker(dataCenter.id)}
      >
        { selectedMarker === dataCenter.id && (
          <InfoWindow
            options={{
              headerDisabled: true
            }}
          >
            <div className="p-2 max-w-xs">
              <h3 className="font-bold text-lg mb-1">{dataCenter.name}</h3>
              <p className="lg:text-[16px] mb-1">{dataCenter.address}</p>
              <p className="lg:text-[16px] text-[#2569ED]">Phone: {dataCenter.phone}</p>
              <p className="lg:text-[16px] text-[#2569ED]">Email: {dataCenter.email}</p>
            </div>
          </InfoWindow>
        )}

      </Marker>
    ))

  }, [dataCenters, selectedMarker, isLoaded])

  return (
    <>
      <button
        className="lg:px-10 lg:py-2 px-2 py-0 text-white lg:text-[16px] text-[12px] font-bold px-6 py-2 bg-gradient-to-r from-secondary to-primary hover:opacity-90 transition-opacity"
        onClick={onOpenModalBtnClick}
      >
        View on Map
      </button>

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

          <GoogleMap
            mapContainerStyle={{ height: '100%' }}
            center={{lat: 10.762622, lng: 106.660172}}
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
            { renderDataCenters() }
          </GoogleMap>
        </div>
      </Modal>
    </>
  );
};

export default ViewMapModal;