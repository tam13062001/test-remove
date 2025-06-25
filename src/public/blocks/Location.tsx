import { BaseProps } from "../core/get-props";
import {Modal, Collapse, ConfigProvider } from "antd";
import { useCallback, useState } from "react";
import { ArrowRightOutlined } from "@ant-design/icons";

type OurValueCollapseProps = {
  country: string;
  locations: { title: string; address: string }[];
  open: boolean;
  image_url?: string;
  phone?: string;
  email?: string;
  map_url?: string;
};


export default function LocationItemBlock(props: BaseProps<OurValueCollapseProps>) {
  const { country, locations, open, image_url, phone, email } = props.data;
  const [selectedAddress, setSelectedAddress] = useState<string | null>(null);
  const [isMapOpen, setIsMapOpen] = useState(false);

  const handleAddressClick = (address: string) => {
  let parsedAddress = address;
  if (
    address.trim() ===
    '52-54-56 E. B2, Sala Residential Area, District 2 (now Thu Duc), Ho Chi Minh City 700000, Vietnam'
  ) {
    parsedAddress =
      '10.773558098980695, 106.72757300974644';
  }

  else if (
    address.trim() ===
    '7th Floor, Unit B, Center, 8 Rockwell Dr, Makati, 1209 Metro Manila, Philippines'
  ) {
    parsedAddress =
      '14.5595917233759, 121.01949054519686';
  }
  setSelectedAddress(parsedAddress);
  setIsMapOpen(true);
};

  const renderContent = useCallback(() => {
    const location = locations?.[0];
    if (!location) return null;

    return (
      <div className="flex flex-col lg:flex-row justify-between">
        <div className="flex flex-col justify-center lg:w-2/5 lg:mr-[50px]">
          <div className="font-bold lg:text-[20px] text-[13px] mb-2">{location.title}</div>
          <div 
            className="mb-4 lg:text-[20px] text-[13px] cursor-pointer hover:underline"
            dangerouslySetInnerHTML={{ __html: location.address }}
            onClick={() => handleAddressClick(location.address)}
          />
          {phone && (
            <div className="mb-2">
              <span className="font-regular lg:text-[20px] text-[13px]">Phone: </span>
              <a className="text-blue-500 lg:text-[20px] text-[13px]" href={`tel:${phone}`}>
                {phone}
              </a>
            </div>
          )}
          {email && (
            <div className="mb-4">
              <span className="font-regular lg:text-[20px] text-[13px]">Email: </span>
              <a className="text-blue-500 lg:text-[20px] text-[13px]" href={`mailto:${email}`}>
                {email}
              </a>
            </div>
          )}
        </div>

        {image_url && (
          <div className="lg:w-3/5 w-full flex justify-end">
            <img
              src={image_url}
              alt={country}
              className="w-auto h-auto max-w-full"
            />
          </div>
        )}
      </div>
    );
  }, [locations, phone, email, image_url]);

  // Tạo url nhúng Google Map từ địa chỉ
  const mapEmbedUrl = selectedAddress
    ? `https://www.google.com/maps?q=${encodeURIComponent(selectedAddress)}&output=embed`
    : "";

  return (
    <>
      <ConfigProvider
        theme={{
          components: {
            Collapse: {
              headerPadding: '20px 0',
              contentPadding: '24px 0',
            },
          },
        }}
      >
        <Collapse
          defaultActiveKey={open ? '1' : undefined}
          expandIconPosition="end"
          ghost
          expandIcon={({ isActive }) => (
            <div className="!text-primary">
              <ArrowRightOutlined 
                className="mt-2" 
                style={{ color: '#315cd4' }} 
                rotate={isActive ? 90 : 0} 
              />
            </div>
          )}
        >
          <Collapse.Panel
            key="1"
            header={
              <div className="font-[700] text-primary lg:text-[24px] text-[20px]">
                {country}
              </div>
            }
          >
            {renderContent()}
          </Collapse.Panel>
        </Collapse>
      </ConfigProvider>

      <Modal
        open={isMapOpen}
        onCancel={() => setIsMapOpen(false)}
        footer={null}
        width="80vw"
        bodyStyle={{ padding: 0, minHeight: 400 }}
        destroyOnClose
      >
        {selectedAddress && (
          <iframe
            src={mapEmbedUrl}
            width="100%"
            height="600"
            style={{ border: 0 }}
            allowFullScreen
            loading="lazy"
            referrerPolicy="no-referrer-when-downgrade"
            title="Google Map"
          />
        )}
      </Modal>
    </>
  );
}