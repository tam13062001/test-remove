import { BaseProps } from "../core/get-props";
import { Collapse, ConfigProvider } from "antd";
import { MinusOutlined, PlusOutlined } from "@ant-design/icons";
import { useCallback } from "@wordpress/element";
import {ArrowRightOutlined} from "@ant-design/icons";

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
  const { country, locations, open, image_url, phone, email, map_url } = props.data;

  const renderIcon = useCallback((isActive: boolean) => {
    return (
      <div className="pt-2">
        {isActive ? <MinusOutlined className="text-secondary" /> : <PlusOutlined className="text-secondary" />}
      </div>
    );
  }, []);

  const renderContent = useCallback(() => {
    const location = locations?.[0];
    if (!location) return null;

    return (
        <div className="flex flex-col lg:flex-row justify-between">
    {/* Left column */}
    <div className="flex flex-col justify-center lg:w-2/5 lg:mr-2">
      <div className="font-bold lg:text-[20px] text-[13px] mb-2">{location.title}</div>
      <div className="mb-4 lg:text-[20px] text-[13px]" dangerouslySetInnerHTML={{ __html: location.address }} />
      {phone && (
        <div className="mb-2">
          <span className="font-regular lg:lg:text-[20px] text-[13px]">Phone</span>{'  '}
          <a className="text-blue-500 lg:lg:text-[20px] text-[13px]" href={`tel:${phone}`}>{phone}</a>
        </div>
      )}
      {email && (
        <div className="mb-4">
          <span className="font-regular lg:lg:text-[20px] text-[13px]">Email</span>{'  '}
          <a className="text-blue-500 ml-[12px] lg:lg:text-[20px] text-[13px]" href={`mailto:${email}`}>{email}</a>
        </div>
      )}
    </div>

    {/* Right column - image */}
    {image_url && (
      <div className="lg:w-3/5 w-full flex justify-end">
        <img
          src={image_url}
          alt={country}
          className="w-auto h-auto"
        />
      </div>
    )}
  </div>
    );
  }, [locations, phone, email, map_url, image_url]);

  return (
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
        expandIcon={({ isActive }) => <div className={'!text-primary'}><ArrowRightOutlined className="mt-2" color={'#315cd4'} rotate={isActive ? 90 : 0} /></div>}
      >
        <Collapse.Panel
          key="1"
          header={<div className="font-[700] text-primary lg:text-[24px] text-[20px]">{country}</div>}
        >
          {renderContent()}
        </Collapse.Panel>
      </Collapse>
    </ConfigProvider>
  );
}