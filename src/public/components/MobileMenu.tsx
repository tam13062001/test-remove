import {BaseProps} from "../core/get-props";
import {Button, ConfigProvider, Drawer, Menu} from "antd";
import {useCallback, useMemo, useRef, useState} from "@wordpress/element";
import {CloseOutlined} from "@ant-design/icons";

type MenuItem = {
  ID: number
  children: MenuItem[]
  parent: string|number
  title: string
  url: string
}

type MobileMenuProps = {
  logo_url: string
  data: MenuItem[]
}

export default function MobileMenu(props: BaseProps<MobileMenuProps>) {
  const { data, logo_url } = props.data;
  const [open, setOpen] = useState(false);
  const dataRef = useRef<Map<string, any>>(new Map());

  const menuData = useMemo(() => {
    const getItems = (item: MenuItem) => {
      const menuItem: any = {
        key: item.ID,
        label: item.title.replace(/&amp;/g, '&') // Sửa regex để replace tất cả &amp;
      };

      dataRef.current.set(item.ID.toString(), item);

      if (Array.isArray(item.children) && item.children.length > 0) {
        menuItem.children = item.children.map(getItems); // Sửa thành item.children
      }
      return menuItem;
    };

    if (!Array.isArray(data)) return [];
    return data.map(getItems); // Sử dụng hàm getItems đã định nghĩa
  }, [data]);

  const onItemSelect = (info: any) => {
    const item = dataRef.current.get(info.key.toString());
    if (item) {
      window.location.href = item.url;
    }
  };

  return (
    <div>
      <div className={'cursor-pointer'} onClick={() => setOpen(true)}>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M21.1875 3.75H2.8125C2.70937 3.75 2.625 3.83437 2.625 3.9375V5.4375C2.625 5.54062 2.70937 5.625 2.8125 5.625H21.1875C21.2906 5.625 21.375 5.54062 21.375 5.4375V3.9375C21.375 3.83437 21.2906 3.75 21.1875 3.75ZM21.1875 18.375H2.8125C2.70937 18.375 2.625 18.4594 2.625 18.5625V20.0625C2.625 20.1656 2.70937 20.25 2.8125 20.25H21.1875C21.2906 20.25 21.375 20.1656 21.375 20.0625V18.5625C21.375 18.4594 21.2906 18.375 21.1875 18.375ZM21.1875 11.0625H2.8125C2.70937 11.0625 2.625 11.1469 2.625 11.25V12.75C2.625 12.8531 2.70937 12.9375 2.8125 12.9375H21.1875C21.2906 12.9375 21.375 12.8531 21.375 12.75V11.25C21.375 11.1469 21.2906 11.0625 21.1875 11.0625Z" fill="white"/>
        </svg>
      </div>
      <Drawer
        zIndex={1000000}
        open={open}
        onClose={() => setOpen(false)}
        styles={{
          wrapper: { width: '100%' },
          content: { 
            padding: 0, 
            height: '100vh', 
            zIndex: 100000000,
            overflow: 'hidden'
          },
          body: { 
            padding: 0,
            height: '100%',
            display: 'flex',
            flexDirection: 'column' 
          },
          header: { display: "none" }
        }}
      >
        <div className={'bg-gradient-to-br from-secondary to-primary h-full text-white px-5 flex flex-col'}>
          <div className={'flex justify-between p-5'}>
            <img className={'h-7'} src={logo_url} alt="Logo" />
            <Button className={'text-white'} type={'text'} icon={<CloseOutlined />} onClick={() => setOpen(false)} />
          </div>
          <div className="flex-1 overflow-y-auto">
            <ConfigProvider
              theme={{
                components: {
                  Menu: {
                    colorBgBase: 'transparent',
                    popupBg: 'transparent',
                    itemBg: 'transparent',
                    itemColor: '#ffffff',
                    activeBarBorderWidth: 0,
                    itemPaddingInline: 16,
                    itemHeight: 48
                  }
                }
              }}
            >
              <Menu 
                mode={'inline'} 
                items={menuData} 
                onSelect={onItemSelect}
                style={{ height: '100%', borderRight: 0 }}
              />
            </ConfigProvider>
          </div>
        </div>
      </Drawer>
    </div>
  );
}