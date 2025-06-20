 
import React, { useEffect, useRef, useState } from 'react';
import { BaseProps } from "../core/get-props";
import { Button, Modal } from "antd";
import { CloseOutlined } from "@ant-design/icons";

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
  const [mapLoaded, setMapLoaded] = useState(false);
  const [selectedStore, setSelectedStore] = useState<StoreLocation | null>(null);
  const mapRef = useRef<HTMLDivElement>(null);
  const mapInstance = useRef<google.maps.Map | null>(null);
  const markersRef = useRef<google.maps.Marker[]>([]);
  const infoWindowRef = useRef<google.maps.InfoWindow | null>(null);

  const image_url = attributes?.image_url || '/default-marker.png';

  const defaultStores: StoreLocation[] = [
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
  ];

  const storeLocations = attributes?.storeLocations || defaultStores;
  const apiKey = attributes?.apiKey || 'AIzaSyCEwPmqmSUiGv5_2fggY6Puo322J9_09mw';
  const defaultZoom = attributes?.defaultZoom || 5;

  const loadGoogleMaps = () => {
    if (window.google && window.google.maps) {
      setMapLoaded(true);
      return;
    }

    const script = document.createElement('script');
    script.src = `https://maps.googleapis.com/maps/api/js?key=${apiKey}&libraries=places`;
    script.async = true;
    script.defer = true;
    script.onload = () => setMapLoaded(true);
    document.head.appendChild(script);
  };

  const initMap = () => {
    if (!mapRef.current || !window.google || !window.google.maps) return;

    const bounds = new google.maps.LatLngBounds();
    storeLocations.forEach(store => {
      bounds.extend(new google.maps.LatLng(store.position.lat, store.position.lng));
    });

    mapInstance.current = new google.maps.Map(mapRef.current, {
      zoom: defaultZoom,
      center: bounds.getCenter(),
      mapTypeId: 'roadmap',
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
    });

    mapInstance.current.fitBounds(bounds);

    // Tạo InfoWindow không có header
    infoWindowRef.current = new google.maps.InfoWindow({
      pixelOffset: new google.maps.Size(0, -30),
      disableAutoPan: false, // Tùy chọn này giúp tự động điều chỉnh vị trí cửa sổ
    });

    markersRef.current = storeLocations.map(store => {
      const marker = new google.maps.Marker({
        position: store.position,
        map: mapInstance.current,
        title: store.name,
        icon: {
          url: image_url,
          scaledSize: new google.maps.Size(32, 32)
        }
      });

      marker.addListener('click', () => {
        setSelectedStore(store);
        if (infoWindowRef.current) {
          infoWindowRef.current.setContent(`
            <div class="p-2 max-w-xs">
              <h3 class="font-bold text-lg mb-1">${store.name}</h3>
              <p class="lg:text-[16px] mb-1">${store.address}</p>
              <p class="lg:text-[16px] text-[#2569ED]">Phone: ${store.phone}</p>
              <p class="lg:text-[16px] text-[#2569ED]">Email: ${store.email}</p>
            </div>
          `);
          infoWindowRef.current.open({
            anchor: marker,
            map: mapInstance.current
          });
        }
      });

      return marker;
    });
  };

  const onCloseModalBtnClick = () => {
    setIsOpen(false);
    setSelectedStore(null);
    if (infoWindowRef.current) {
      infoWindowRef.current.close();
    }
  };

  const onOpenModalBtnClick = () => {
    setIsOpen(true);
    loadGoogleMaps();
  };

  useEffect(() => {
    if (isOpen && mapLoaded) {
      initMap();
    }

    return () => {
      // Dọn dẹp khi component unmount
      markersRef.current.forEach(marker => marker.setMap(null));
      if (infoWindowRef.current) {
        infoWindowRef.current.close();
      }
    };
  }, [isOpen, mapLoaded]);

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
          
          <div ref={mapRef} className="w-full h-full" />
          
        </div>
      </Modal>
    </>
  );
};

export default ViewMapModal;